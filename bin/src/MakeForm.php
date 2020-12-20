<?php


namespace Console;


use KHerGe\File\File;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class MakeForm extends Command {
	protected function configure() {
		$this->setName( "make:form" )
		     ->setDescription( "Create a new form based on entity" )
		     ->setHelp( "This command allows you to create a new form easily based on entity name" );
	}

	protected function execute( InputInterface $input, OutputInterface $output ) {
		$helper   = $this->getHelper( 'question' );
		$formFile = new File( __DIR__ . "/form.txt", "r" );
		$formStr  = $formFile->read();


		$questionName = new Question(
			"<info>Please type the name of the entity : </info>"
		);
		$questionName->setValidator( function ( $answer ) {
			if ( ! is_string( $answer ) || $answer == "" ) {
				throw new \RuntimeException(
					'The name of the entity can\'t be empty'
				);
			}

			return $answer;

		} );
		$name     = utf8_encode( $helper->ask( $input, $output, $questionName ) );
		$formName = $name . "Type";
		if ( file_exists( __DIR__ . '/../../entity/' . ucfirst( $name ) . '.php' ) ) {

			$entityName = "\Entity\\" . ucfirst( $name );
			$entity     = new $entityName();
			$fields     = $entity->entity()::fields();
			$str        = "";

			foreach ( $fields as $key => $value ) {
				if ( $key != "id" ) {
					$fieldName = $key;
					$fieldType = $value['type'];
					if ( $fieldType == "integer" ) {
						$fieldType = "number";
					}else if ($fieldType == "boolean"){
						$fieldType = "checkbox";
					}
					$str .= '$builder->add( "' . $fieldName . '", "' . $fieldType . '" );' . "\n";
				}

			}

			$formTypeFile = new File( __DIR__ . "/../../form/" . ucfirst( $formName ) . ".php", "w" );
			$formStr      = str_replace( "%name%", $formName, $formStr );
			$formStr      = str_replace( "%builder%", $str, $formStr );
			$formTypeFile->write( $formStr );

			$output->writeln( "<info>Form generated </info>" );
		} else {
			$output->writeln( "<error>The entity can't be found please be sure to add entity before making form </error>" );
		}

		return 1;
	}
}