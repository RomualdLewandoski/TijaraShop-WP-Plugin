<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Categorie extends \Spot\Entity {
	protected static $table = "categorie";
	protected static $mapper = 'Entity\Mapper\CategorieMapper';

	public static function fields() {
		return [
			'id'       => [ 'type' => 'integer', 'autoincrement' => true, 'primary' => true, ],
			'nom'      => [ 'type' => 'string', 'required' => true, ],
			'position' => [ 'type' => 'integer', 'required' => false, ],
			'parent'   => [ 'type' => 'integer', 'required' => true, ],
            'version' => ['type' => 'datetime', 'required' => true,],

		];
	}

	public static function relations( Mapper $mapper, Entity $entity ) {
		return [
			'getChild'  => $mapper->hasMany( $entity, 'Entity\Categorie', 'parent' ),
			'getParent' => $mapper->belongsTo( $entity, 'Entity\Categorie', "parent" )
		];
	}

	public function getTable() {
		return self::$table;
	}

	public function getMapper(){
		return self::$mapper;
	}

	public function getName() {
		$str = "";
		if ( $this->get( 'getParent' )->nom != null ) {
			$str = $str . $this->get( 'getParent' )->getName() . " --> ";
		}

		$str .= $this->get( 'nom' );

		return $str;

	}


	public function getRelations() {
		return $this->relation( 'getParent' );
	}


}