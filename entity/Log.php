<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Log extends \Spot\Entity {
	protected static $table = "log";

	public static function fields() {
		return [
			'id'     => [ 'type' => 'integer', 'autoincrement' => true, 'primary' => true, ],
			'user'   => [ 'type' => 'string', 'required' => true, ],
			'date'   => [ 'type' => 'datetime', 'required' => true, ],
			'type'   => [ 'type' => 'string', 'required' => true, ],
			'action' => [ 'type' => 'string', 'required' => true, ],
			'target' => [ 'type' => 'integer', 'required' => false, ],
			'before' => [ 'type' => 'text', 'required' => false, ],
			'after'  => [ 'type' => 'text', 'required' => false, ],

		];
	}

	public static function relations( Mapper $mapper, Entity $entity ) {
		return [

		];
	}

	public function getTable() {
		return self::$table;
	}

}