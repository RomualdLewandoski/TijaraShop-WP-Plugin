<?php


namespace App\Controller;


use App\Controller;
use Form\TestType;

class Test_Controller extends Controller {
	public function __construct() {

	}

	public function index() {

		$form = $this->createForm( TestType::class );
		$form->handleRequest( $this->request() );

		echo $form->formStart();
		echo $form->createView();
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
	}
}