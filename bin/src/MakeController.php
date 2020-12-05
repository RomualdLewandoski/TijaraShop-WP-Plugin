<?php


namespace Console;


use KHerGe\File\File;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class MakeController extends Command {
	protected function configure() {
		$this->setName( "make:controller" )
		     ->setDescription( "Create a new controller" )
		     ->setHelp( "This command allows you to create a new controller easily" );
	}

	protected function execute( InputInterface $input, OutputInterface $output ) {
		$helper = $this->getHelper( 'question' );

		$modelControllerFile = new File( __DIR__ . "/Controller.txt", "r" );
		$controllerStr       = $modelControllerFile->read();

		$questionName = new Question(
			"<info>Please type the name of the new controller</info>"
		);
		$questionName->setValidator( function ( $answer ) {
			if ( ! is_string( $answer ) || $answer == "" ) {
				throw new \RuntimeException(
					'The name of the controller can\'t be empty'
				);
			}

			return $answer;
		} );
		$name = utf8_encode( $helper->ask( $input, $output, $questionName ) );

		$realControllerName = ucfirst($name)."_Controller.php";


		return 1;
	}

}