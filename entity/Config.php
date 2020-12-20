<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Config extends \Spot\Entity {
	protected static $table = "config";

	public static function fields() {
		return [
			'id' => ['type' => 'integer','autoincrement' => true ,'primary' => true ,],
'host' => ['type' => 'string','required' => true ,],
'method' => ['type' => 'string','required' => true ,],
'step' => ['type' => 'integer','required' => false ,],

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