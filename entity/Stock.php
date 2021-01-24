<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Stock extends \Spot\Entity
{
    protected static $table = "stock";

    public static function fields()
    {
        return [
            'id' => ['type' => 'integer', 'autoincrement' => true, 'primary' => true,],
            'product_id' => ['type' => 'integer', 'required' => false,],
            'boutique_id' => ['type' => 'integer', 'required' => false,],
            'quantity' => ['type' => 'integer', 'required' => true,],
            'rangement' => ['type' => 'string', 'required' => false]

        ];
    }

    public static function relations(Mapper $mapper, Entity $entity)
    {
        return [
            'product' => $mapper->belongsTo($entity, Product::class, 'product_id'),
            'boutique' => $mapper->belongsTo($entity, Boutique::class, 'boutique_id'),
        ];
    }

    public function getTable()
    {
        return self::$table;
    }

}