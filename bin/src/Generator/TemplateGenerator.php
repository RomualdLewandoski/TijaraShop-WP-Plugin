<?php

namespace Console\Generator;

use KHerGe\File\File;

class TemplateGenerator {

	public function isFolderExist( $arr ) {
		return is_dir( __DIR__ . "/../../../template/" . $arr['name'] );
	}

	public function generateList( $arr ) {
		$model    = new File( __DIR__ . "/model/template_lis.txt", 'r' );
		$modelStr = $model->read();
		mkdir( __DIR__ . "/../../../template/" . $arr['name'] );
		$finalFile = new File( __DIR__ . "/../../../template/" . $arr['name'] .
		                       "/index.html.twig", "w" );
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

	public function generateEdit( $arr ) {
		$model     = new File( __DIR__ . "/model/template_edit.txt", 'r' );
		$modelStr  = $model->read();
		$finalFile = new File( __DIR__ . "/../../../template/" . $arr['name'] .
		                       "/edit.html.twig", "w" );
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

	public function generateCreate( $arr ) {
		$model     = new File( __DIR__ . "/model/template_add.txt", 'r' );
		$modelStr  = $model->read();
		$finalFile = new File( __DIR__ . "/../../../template/" . $arr['name'] .
		                       "/new.html.twig", "w" );
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

	public function generateRead( $arr ) {
		$model     = new File( __DIR__ . "/model/template_read.txt", 'r' );
		$modelStr  = $model->read();
		$finalFile = new File( __DIR__ . "/../../../template/" . $arr['name'] .
		                       "/read.html.twig", "w" );
		$str       = str_replace( [
			"%name%",
			"%slug%",
			"%entityName%",
			"%formName%",
			"%controllerName%",
			"%generatedTableBody%",
			"%generatedTableHead%",
			"%generatedRead%"
		], [
			$arr['name'],
			$arr['slug'],
			$arr['entityName'],
			$arr['formName'],
			$arr['controllerName'],
			$arr['generatedTableBody'],
			$arr['generatedTableHead'],
			$arr['generatedRead']
		], $modelStr );
		$finalFile->write( $str );
	}

	public function generate( $arr ) {
		if ( ! $this->isFolderExist( $arr ) ) {
			$this->generateList( $arr );
			$this->generateEdit( $arr );
			$this->generateCreate( $arr );
			$this->generateRead( $arr );

			return true;
		} else {
			return false;
		}
	}
}