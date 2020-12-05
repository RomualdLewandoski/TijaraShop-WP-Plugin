<?php namespace Console;

use KHerGe\File\Exception\WriteException;
use KHerGe\File\File;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Console\Command;
use Symfony\Component\Console\Question\ConfirmationQuestion;

/**
 * Author: Chidume Nnamdi <kurtwanger40@gmail.com>
 */
class Migration extends Command {

	/*
		 // green text
		$output->writeln('<info>foo</info>');

		// yellow text
		$output->writeln('<comment>foo</comment>');

		// black text on a cyan background
		$output->writeln('<question>foo</question>');

		// white text on a red background
		$output->writeln('<error>foo</error>');
	 */

	public function configure() {
		$this->setName( 'migration' )
		     ->setDescription( 'Create a migration class' )
		     ->setHelp( 'This command allows you to create a migration class easily' );
		//-> addArgument('username', InputArgument::REQUIRED, 'The username of the user.');
	}

	public function execute( InputInterface $input, OutputInterface $output ) {
		//$this -> greetUser($input, $output);
		$this->createMigration( $input, $output );

		return 1;
	}

	function createMigration( InputInterface $input, OutputInterface $output ) {
		$outputStyle = new OutputFormatterStyle( 'red', '', [ 'bold', 'blink' ] );
		$output->getFormatter()->setStyle( 'fire', $outputStyle );


		$helper   = $this->getHelper( 'question' );
		$question = new ConfirmationQuestion( "Voulez vous créer une nouvelle migration ? [<info>y</info>/n] ", false, '/^(y|o)/i' );

		if ( $helper->ask( $input, $output, $question ) ) {
			$folder  = __DIR__ . "/../../migration/migrate/";
			$configFolder  = __DIR__ . "/../../config/";
			$fi      = new \FilesystemIterator( $folder, \FilesystemIterator::SKIP_DOTS );
			$count   = iterator_count( $fi ) - 1;
			$version = iterator_count( $fi );
			$output->write( "Next migration file will be named <info>" . $count . "</info> and next version will be <info>" . $version . "</info>\n" );
			$migrateName          = "Migrate_" . $count;
			$newMigrateFile       = new File( $folder . $migrateName . ".php", "w" );
			$configMigration = new File($configFolder."migrationVersion.txt", "w");
			$migrateModelFile     = new File( __DIR__ . "\migrate.txt", 'r' );
			$migrationModelString = "";
			foreach ( $migrateModelFile->iterate() as $buffer ) {
				$migrationModelString .= $buffer;
			}
			$migrate = str_replace( "%ClassName%", $migrateName, $migrationModelString );
			$migrate = str_replace( "%Version%", $version, $migrate );
			try {
				$newMigrateFile->write( $migrate );
				$configMigration->write($version);
				$output->write( "<info>Migrate created on " . $folder . "/" . $migrateName . ".php</info>" );
			} catch ( WriteException $e ) {
				$output->write( "<error>" . $e->getMessage() . "</error>" );
			}
		} else {
			$test = new File( __DIR__ . "/test.txt", 'w' );


			$output->write( "<fire>Operation Canceled </fire>" );
		}

	}
}