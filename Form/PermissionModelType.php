<?php


namespace Form;


class PermissionModelType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "name", "string" );
$builder->add( "hasAdmin", "checkbox", [
	'label'=>"Accès admin",
	'attr'=>[
		'data-toggle'=>"toggle",
		'data-on'=>"Oui",
		'data-off'=>"Non",
		'data-onstyle'=>"success",
		'data-offstyle'=>"danger",
		"data-size"=>"sm"
	]
] );
$builder->add( "hasCompta", "checkbox",[
	'label'=>"Accès compta",
	'attr'=>[
		'data-toggle'=>"toggle",
		'data-on'=>"Oui",
		'data-off'=>"Non",
		'data-onstyle'=>"success",
		'data-offstyle'=>"danger",
		"data-size"=>"sm"
	]
]);
$builder->add( "hasProductManagement", "checkbox", [
	'label'=>"Accès gestion produit",
	'attr'=>[
		'data-toggle'=>"toggle",
		'data-on'=>"Oui",
		'data-off'=>"Non",
		'data-onstyle'=>"success",
		'data-offstyle'=>"danger",
		"data-size"=>"sm"
	]
] );
$builder->add( "hasSupplierManagement", "checkbox", [
	'label'=>"Accès gestion fournisseurs",
	'attr'=>[
		'data-toggle'=>"toggle",
		'data-on'=>"Oui",
		'data-off'=>"Non",
		'data-onstyle'=>"success",
		'data-offstyle'=>"danger",
		"data-size"=>"sm"
	]
] );
$builder->add( "hasStock", "checkbox", [
	'label'=>"Accès stocks",
	'attr'=>[
		'data-toggle'=>"toggle",
		'data-on'=>"Oui",
		'data-off'=>"Non",
		'data-onstyle'=>"success",
		'data-offstyle'=>"danger",
		"data-size"=>"sm"
	]
] );
$builder->add( "hasCaisse", "checkbox", [
	'label'=>"Accès caisse",
	'attr'=>[
		'data-toggle'=>"toggle",
		'data-on'=>"Oui",
		'data-off'=>"Non",
		'data-onstyle'=>"success",
		'data-offstyle'=>"danger",
		"data-size"=>"sm"
	]
] );

//data-toggle="toggle"
//                                               data-on="Oui"
//                                               data-off="Non"
//                                               data-onstyle="success" data-offstyle="danger" data-size="sm"

	}
}