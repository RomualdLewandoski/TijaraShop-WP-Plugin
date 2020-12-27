<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Tempo extends \Spot\Entity {
	protected static $table = "tempo";

	public static function fields() {
		return [
			'id' => ['type' => 'integer','autoincrement' => true ,'primary' => true ,],
'name' => ['type' => 'string','required' => true ,],
'type' => ['type' => 'integer','required' => true ,],
'description' => ['type' => 'text','required' => false ,],
'isActive' => ['type' => 'boolean','required' => true ,],
'created' => ['type' => 'datetime','required' => true ,],
'color' => ['type' => 'string','required' => true ,],

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