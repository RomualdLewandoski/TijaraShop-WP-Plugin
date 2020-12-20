<?php


namespace App\Controller;


use App\Controller;
use Entity\Categorie;
use Entity\Tempo;
use Form\CategorieType;
use Form\TempoType;
use Form\TestType;

class Test_Controller extends Controller {
	public function __construct() {

	}

	public function index() {
		/*$em = $this->getManager()->getRepository( Tempo::class );
		//$tempo = $em->first( [ 'id' => 5 ] );
		$tempo = new Tempo();
		$form  = $this->createForm( TempoType::class, $tempo );
		//$form  = $this->createForm( TestType::class);
		$form->handleRequest( $this->request() );


		if ( $form->isSubmitted() && $form->isValid() ) {

			$em->save( $tempo );
			echo "Entity Saved";
		}

		echo $form->formStart();
		echo $form->createView();
		//echo $form->display('created');
		echo "<div class='text-center mt-4'>";
		echo $form->formSubmit();
		echo "</div>";
		echo $form->formClose();

		//$em = $this->getManager()->getRepository( 'Entity\Test' );
		/*foreach ( $em->all() as $data ) {
			echo $data->title . "<br>";
		}*/
		/**
		 * GET ONE BY AND EDIT
		 */
		/*
		    $old = $em->first( [ 'id' => 2 ] );
			$old->set( 'title', 'coucou2' );
			$em->save( $old );
		*/

		/**
		 * GET CURRENT MIGRATION ACTION
		 */
		/*$table =  $em->entity()::table();
		$schemaManager = $em->connection()->getSchemaManager();
		$connection = $em->connection();
		$tableObject = $schemaManager->listTableDetails($table);
		$tableObjects[] = $tableObject;
		$schema = new \Doctrine\DBAL\Schema\Schema($tableObjects);
		$tableColumns = $tableObject->getColumns();
		$tableExists = !empty($tableColumns);
		if ($tableExists) {
			// Update existing table
			$existingTable = $schema->getTable($table);
			$newSchema = $em->resolver()->migrateCreateSchema();
			$queries = $schema->getMigrateToSql($newSchema, $connection->getDatabasePlatform());
		} else {
			// Create new table
			$newSchema = $em->resolver()->migrateCreateSchema();
			$queries = $newSchema->toSql($connection->getDatabasePlatform());
		}
		var_dump($queries);

		//$tableObject = $schemaManager->listTableDetails($table);
		$em->migrate();*/


		$em = $this->getManager()->getRepository( Categorie::class );
		//$em->save($test);


		$test = $em->first( [ 'id' => 2 ] );

		//r( $test->getParent );

		$test2 = $test->getParent;

		echo( $test2->getName() . "<br>" );


		$test  = $em->first( [ 'id' => 1 ] );
		$test2 = $test->getChild;

		foreach ( $test2 as $child ) {
			echo $child->nom . "<br>";
		}

		$form = $this->createForm(CategorieType::class, null);
		echo $form->createView(true);

	}
}