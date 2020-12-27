<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Brand extends \Spot\Entity {
	protected static $table = "brand";

	public static function fields() {
		return [
			'id' => ['type' => 'integer','autoincrement' => true ,'primary' => true ,],
'nom' => ['type' => 'string','required' => true ,],
'position' => ['type' => 'integer','required' => false ,],

		];
	}

	public static function relations( Mapper $mapper, Entity $entity ) {
		return [
            
		];
	}

	public function getTable(){
		return self::$table;
	}

}