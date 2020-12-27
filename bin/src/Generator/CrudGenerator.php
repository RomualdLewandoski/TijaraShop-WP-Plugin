<?php

namespace Console\Generator;

use KHerGe\File\File;

class CrudGenerator {

	public function generateController( $arr ) {
		$model     = new File( __DIR__ . "/model/crud_controller.txt", 'r' );
		$modelStr  = $model->read();
		$finalFile = new File( __DIR__ . "/../../../controller/" . $arr['controllerName'] .
		                       ".php", "w" );
		$str       = str_replace( [
			"%name%",
			"%slug%",
			"%entityName%",
			"%formName%",
			"%controllerName%",
			"%generatedTableBody%",
			"%generatedTableHead%"
		], [
			$arr['name'],
			$arr['slug'],
			$arr['entityName'],
			$arr['formName'],
			$arr['controllerName'],
			$arr['generatedTableBody'],
			$arr['generatedTableHead'],
		], $modelStr );
		$finalFile->write( $str );
	}

	public function generate( $arr ) {
		$templateGenerator = new TemplateGenerator();
		if ( $templateGenerator->generate( $arr ) ) {
			( new FormGenerator() )->generate( $arr );
			$this->generateController($arr);

			return true;
		} else {
			return false;
		}
	}
}