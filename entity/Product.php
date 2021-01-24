<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Product extends \Spot\Entity
{
    protected static $table = "product";

    public static function fields()
    {
        return [
            'id' => ['type' => 'integer', 'autoincrement' => true, 'primary' => true,],
            'Designiation' => ['type' => 'string', 'required' => true,],
            'label' => ['type' => 'string', 'required' => true,],
            'codeBarre' => ['type' => 'string', 'required' => true,],
            'refArticle' => ['type' => 'string', 'required' => true,],
            'refFournisseur' => ['type' => 'string', 'required' => false,],
            'Poid' => ['type' => 'float', 'required' => false,],
            'Hauteur' => ['type' => 'float', 'required' => false,],
            'Largeur' => ['type' => 'float', 'required' => false,],
            'Longueur' => ['type' => 'float', 'required' => false,],
            'prixAchat' => ['type' => 'float', 'required' => false,],
            'prixVente' => ['type' => 'float', 'required' => true,],
            'tva' => ['type' => 'float', 'required' => false,],
            'stockMin' => ['type' => 'integer', 'required' => true,],
            'descriptionCourte' => ['type' => 'text', 'required' => false,],
            'description' => ['type' => 'text', 'required' => false,],
            'version' => ['type' => 'datetime', 'required' => true,],
            'isOnWeb' => ['type' => 'boolean', 'required' => true,],
            'brand_id' => ['type' => 'integer', 'required' => false,],
            'livraison' => ['type' => 'integer', 'required' => false,]
        ];
    }

    public static function relations(Mapper $mapper, Entity $entity)
    {
        return [
            'brand' => $mapper->belongsTo($entity, Brand::class, 'brand_id'),
            'stocks' => $mapper->hasManyThrough($entity, Boutique::class, Stock::class, 'boutique_id', 'product_id'),
            'suppliers' => $mapper->hasManyThrough($entity, Supplier::class, SuppliersProducts::class, 'supplier_id', 'product_id'),
            'categories' => $mapper->hasManyThrough($entity, Categorie::class, Catproducts::class, 'category_id', 'product_id' )
		];
    }

    public function getTable()
    {
        return self::$table;
    }

}