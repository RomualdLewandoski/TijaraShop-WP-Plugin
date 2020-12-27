<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class PermissionModel extends \Spot\Entity {
	protected static $table = "permissionmodel";

	public static function fields() {
		return [
			'id' => ['type' => 'integer','autoincrement' => true ,'primary' => true ,],
'name' => ['type' => 'string','required' => true ,],
'hasAdmin' => ['type' => 'boolean','required' => true ,],
'hasCompta' => ['type' => 'boolean','required' => true ,],
'hasProductManagement' => ['type' => 'boolean','required' => true ,],
'hasSupplierManagement' => ['type' => 'boolean','required' => true ,],
'hasStock' => ['type' => 'boolean','required' => true ,],
'hasCaisse' => ['type' => 'boolean','required' => true ,],
'version' => ['type' => 'datetime','required' => true ,],

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