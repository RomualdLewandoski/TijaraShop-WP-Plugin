<?php


namespace Console;


use Console\Generator\CrudGenerator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class MakeCrud extends Command {
	public function configure() {
		$this->setName( "make:crud" )
		     ->setDescription( "Create a crud based on entity name" )
		     ->setHelp( "This command allows you to create a new Crud easily" );
	}

	protected function execute( InputInterface $input, OutputInterface $output ) {
		$helper       = $this->getHelper( 'question' );
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
		$name       = utf8_encode( $helper->ask( $input, $output, $questionName ) );
		$arr        = [
			'name'           => $name,
			'slug'           => strtolower( $name ),
			'entityName'     => $name,
			'formName'       => $name . "Type",
			'controllerName' => $name . "_Controller",
		];
		$entityName = "\Entity\\" . ucfirst( $arr['name'] );
		$entity     = new $entityName();
		$fields     = $entity->entity()::fields();
		$headStr    = "";
		$bodyStr    = "";
		$read = "";
		foreach ( $fields as $key => $value ) {
			$headStr .= "<th>$key </th>\n";
			$bodyStr .= "<td>{{ $name.$key }}</td>\n";
			$read .= "<tr>\n <th>$key</th>\n <td>{{ $name.$key }}</td> </tr>";
		}
		$arr['generatedTableHead'] = $headStr;
		$arr['generatedTableBody'] = $bodyStr;
		$arr['generatedRead'] = $read;
		$crudGenerator =new CrudGenerator();
		if ($crudGenerator->generate($arr)){
			$output->writeln("<info>Your crud has been sucessfully generated</info>");
		}else{
			$output->writeln("<error>Oups</error> something when wrong perhaps template already exist");
		}
		return 1;
	}
}