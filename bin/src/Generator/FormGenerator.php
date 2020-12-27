<?php


namespace Console\Generator;


use KHerGe\File\File;

class FormGenerator {
	public function generate($arr) {
		$model    = new File( __DIR__ . "/model/form.txt", 'r' );
		$modelStr = $model->read();
		$finalFile = new File( __DIR__ . "/../../../Form/" . $arr['formName'] .
		                       ".php", "w" );

		$entityName = "\Entity\\" . ucfirst( $arr['name'] );
		$entity     = new $entityName();
		$fields     = $entity->entity()::fields();
		$formStr        = "";

		foreach ( $fields as $key => $value ) {
			if ( $key != "id" ) {
				$fieldName = $key;
				$fieldType = $value['type'];
				if ( $fieldType == "integer" ) {
					$fieldType = "number";
				}else if ($fieldType == "boolean"){
					$fieldType = "checkbox";
				}
				$formStr .= '$builder->add( "' . $fieldName . '", "' . $fieldType . '" );' . "\n";
			}

		}

		$str       = str_replace( [
			"%name%",
			"%slug%",
			"%entityName%",
			"%formName%",
			"%controllerName%",
			"%generatedTableBody%",
			"%generatedTableHead%",
			"%builder%"
		], [
			$arr['name'],
			$arr['slug'],
			$arr['entityName'],
			$arr['formName'],
			$arr['controllerName'],
			$arr['generatedTableBody'],
			$arr['generatedTableHead'],
			$formStr
		], $modelStr );
		$finalFile->write( $str );
	}
}