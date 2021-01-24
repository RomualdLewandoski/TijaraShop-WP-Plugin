<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class SuppliersProducts extends \Spot\Entity {
	protected static $table = "suppliersproducts";

	public static function fields() {
		return [
			'id' => ['type' => 'integer','autoincrement' => true ,'primary' => true ,],
'product_id' => ['type' => 'integer','required' => false ,],
'supplier_id' => ['type' => 'integer','required' => false ,],

		];
	}

	public static function relations( Mapper $mapper, Entity $entity ) {
		return [
            'product' => $mapper->belongsTo($entity, Product::class, 'product_id'),
            'supplier' => $mapper->belongsTo($entity, Supplier::class, 'supplier_id'),
		];
	}

	public function getTable(){
		return self::$table;
	}

}