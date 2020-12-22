<?php

namespace Entity;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Supplier extends \Spot\Entity {
	protected static $table = "supplier";

	public static function fields() {
		return [
			'id' => ['type' => 'integer','autoincrement' => true ,'primary' => true ,],
'isSociety' => ['type' => 'boolean','required' => false ,],
'societyName' => ['type' => 'string','required' => false ,],
'gender' => ['type' => 'string','required' => false ,],
'firstName' => ['type' => 'string','required' => false ,],
'lastName' => ['type' => 'string','required' => false ,],
'address' => ['type' => 'string','required' => false ,],
'zipCode' => ['type' => 'string','required' => false ,],
'city' => ['type' => 'string','required' => false ,],
'country' => ['type' => 'string','required' => false ,],
'phone' => ['type' => 'string','required' => false ,],
'mobilePhone' => ['type' => 'string','required' => false ,],
'mail' => ['type' => 'string','required' => false ,],
'refCode' => ['type' => 'string','required' => false ,],
'webSite' => ['type' => 'string','required' => false ,],
'paymentType' => ['type' => 'integer','required' => false ,],
'iban' => ['type' => 'string','required' => false ,],
'bic' => ['type' => 'string','required' => false ,],
'tva' => ['type' => 'string','required' => false ,],
'siret' => ['type' => 'string','required' => false ,],
'contact' => ['type' => 'text','required' => false ,],
'notes' => ['type' => 'text','required' => false ,],
'isActive' => ['type' => 'boolean','required' => false ,],
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