<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Test extends \Spot\Entity {
	protected static $table = "test";

	public static function fields() {
		return [
			'id'    => [ 'type' => 'integer', 'autoincrement' => true, 'primary' => true ],
			'title' => [ 'type' => 'string', 'required' => true ],
		];
	}

	public static function relations( Mapper $mapper, Entity $entity ) {
		return [

		];
	}

}