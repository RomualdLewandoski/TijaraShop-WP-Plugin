<?php


namespace Console;


use Entity\Test;
use KHerGe\File\File;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

class MakeEntity extends Command {
	protected function configure() {
		$this->setName( "make:entity" )
		     ->setDescription( "Create a new entity" )
		     ->setHelp( "This command allows you to create a new entity easily" );
	}

	protected function execute( InputInterface $input, OutputInterface $output ) {
		$entityModelFile = new File( __DIR__ . "/entity.txt", "r" );
		$entityStr       = $entityModelFile->read();
		$helper          = $this->getHelper( 'question' );
		$questionName    = new Question(
			"<info>Please type the name of the new Entity </info>"
		);
		$questionName->setValidator( function ( $answer ) {
			if ( ! is_string( $answer ) || $answer == "" ) {
				throw new \RuntimeException(
					'The name of the entity can\'t be empty'
				);
			}

			return $answer;
		} );
		$name = $helper->ask( $input, $output, $questionName );
		if ( file_exists( __DIR__ . "/../../entity/" . ucfirst( $name ) . ".php" ) ) {
			$entityName = "\Entity\\" . $name;
			$entity     = new $entityName();
			$fields     = $entity->entity()::fields();
			$entityFile = new File( __DIR__ . "/../../entity/" . ucfirst( $name ) . ".php", "r+" );
		} else {
			$fields       = [];
			$entityFile   = new File( __DIR__ . "/../../entity/" . ucfirst( $name ) . ".php", "w" );
			$idArr        = [ "type" => "integer", "autoincrement" => "true", "primary" => "true" ];
			$fields['id'] = $idArr;
		}

		//todo boucle posage de question
		while ( $data = $this->askForNewField( $input, $output, $helper ) ) {
			if ( $data['state'] ) {

				$fields[ $data['name'] ] = $data['data'];
			} else {
				break;
			}
		}

		//todo generation OU regen du fichier
		$entityStr = str_replace( "%Name%", ucfirst( $name ), $entityStr );

		$str = "";
		foreach ( $fields as $key => $value ) {
			$str .= "'" . $key . "' => [";
			foreach ( $value as $key2 => $value2 ) {
				if ( $value2 == "true" ) {
					$str .= "'" . $key2 . "' => true ,";
				} else if ( $value2 == "false" || $value2 == false) {
					$str .= "'" . $key2 . "' => false ,";
				} else {
					$str .= "'" . $key2 . "' => '" . $value2 . "',";
				}


			}
			$str .= "],\n";
		}
		$entityStr = str_replace( "%Fields%", $str, $entityStr );
		$entityStr = str_replace( "%Relations%", "", $entityStr );
		$entityStr = str_replace( "%tableName%", mb_strtolower( $name ), $entityStr );
		$entityFile->write( $entityStr );

		return 1;
	}

	function askForNewField( InputInterface $input, OutputInterface $output, $helper ) {
		$outputStyle = new OutputFormatterStyle( 'red', '', [ 'bold', 'blink' ] );
		$output->getFormatter()->setStyle( 'fire', $outputStyle );
		$arr          = [];
		$questionName = new Question(
			"<info>Please type the name of the field or nothing to stop adding fields </info>"
		);
		$questionName->setValidator( function ( $answer ) {
			if ( ! is_string( $answer ) || $answer == "" ) {
				return null;
			}

			return $answer;
		} );
		$name = $helper->ask( $input, $output, $questionName );
		if ( $name == null ) {
			$arr['state'] = false;
		} else {
			$arr['state'] = true;

			$arr['name'] = $name;
			//Step2 ask for type
			$questionType = new Question(
				"<info>Please type the type of the field </info>"
			);
			$questionType->setValidator( function ( $answer ) {
				switch ( mb_strtolower( $answer ) ) {
					case 'smallint':
					case 'integer':
					case 'bigint':
					case 'decimal':
					case 'float':
					case 'string':
					case 'text':
					case 'guid':
					case 'binary':
					case 'blob':
					case 'boolean':
					case 'date':
					case 'datetime':
					case 'datetimetz':
					case 'time':
					case 'array':
					case 'simple_array':
					case 'json_array':
						return $answer;

					default:
						throw new \RuntimeException(
							'The type of the fields is unknown'
						);

				}
			} );
			$type = $helper->ask( $input, $output, $questionType );
			//step3 ask for not null
			$questionNotNull = new ConfirmationQuestion( '<info>Does this filed can be null ? [y/n] </info>', false, '/^(y|o)/i' );
			if ( $helper->ask( $input, $output, $questionNotNull ) ) {
				$flag = "false";
			} else {
				$flag = "true";
			}
			$temp        = [ "type" => $type, 'required' => $flag ];
			$arr['data'] = $temp;

		}


		return $arr;
	}

}