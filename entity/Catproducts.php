<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Catproducts extends \Spot\Entity {
	protected static $table = "catproducts";

	public static function fields() {
		return [
			'id' => ['type' => 'integer','autoincrement' => true ,'primary' => true ,],
            'product_id' => ['type' => 'integer','required' => false ,],
            'category_id' => ['type' => 'integer','required' => false ,],
		];
	}

	public static function relations( Mapper $mapper, Entity $entity ) {
		return [
            'product' => $mapper->belongsTo($entity, Product::class, 'product_id'),
            'category' => $mapper->belongsTo($entity, Categorie::class, 'category_id')
        ];
	}

	public function getTable(){
		return self::$table;
	}

}