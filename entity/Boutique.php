<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Boutique extends \Spot\Entity
{
    protected static $table = "boutique";

    public static function fields()
    {
        return [
            'id' => ['type' => 'integer', 'autoincrement' => true, 'primary' => true,],
            'nom' => ['type' => 'string', 'required' => true,],
            'isDefault' => ['type' => 'boolean', 'required' => true,],
            'version' => ['type' => 'datetime', 'required' => true,],

        ];
    }

    public static function relations(Mapper $mapper, Entity $entity)
    {
        return [
            'stocks' => $mapper->hasMany( $entity, Stock::class, 'boutique_id'),
        ];
    }

    public function getTable()
    {
        return self::$table;
    }

}