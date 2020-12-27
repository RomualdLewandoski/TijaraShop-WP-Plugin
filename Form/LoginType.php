<?php


namespace Form;


use Entity\PermissionModel;

class LoginType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "username", "string", [
			'has_label' => false,
			'attr'      => [
				'placeholder'  => "Nom d utilisateur",
				'autocomplete' => "nofill"
			]
		] );
		$builder->add( "password", "password", [
			'has_label' => false,
			'mapped'    => false,
			'required'  => false,
			'attr'      => [
				'placeholder'=>"Mot de passe (facultatif)"
			]
		] );
		$builder->add( "hasAdmin", "checkbox", [
			'label' => "Accès admin",
			'attr'  => [
				'data-toggle'   => "toggle",
				'data-on'       => "Oui",
				'data-off'      => "Non",
				'data-onstyle'  => "success",
				'data-offstyle' => "danger",
				"data-size"     => "sm"
			]
		] );
		$builder->add( "hasCompta", "checkbox", [
			'label' => "Accès compta",
			'attr'  => [
				'data-toggle'   => "toggle",
				'data-on'       => "Oui",
				'data-off'      => "Non",
				'data-onstyle'  => "success",
				'data-offstyle' => "danger",
				"data-size"     => "sm"
			]
		] );
		$builder->add( "hasProductManagement", "checkbox", [
			'label' => "Accès gestion produit",
			'attr'  => [
				'data-toggle'   => "toggle",
				'data-on'       => "Oui",
				'data-off'      => "Non",
				'data-onstyle'  => "success",
				'data-offstyle' => "danger",
				"data-size"     => "sm"
			]
		] );
		$builder->add( "hasSupplierManagement", "checkbox", [
			'label' => "Accès gestion fournisseurs",
			'attr'  => [
				'data-toggle'   => "toggle",
				'data-on'       => "Oui",
				'data-off'      => "Non",
				'data-onstyle'  => "success",
				'data-offstyle' => "danger",
				"data-size"     => "sm"
			]
		] );
		$builder->add( "hasStock", "checkbox", [
			'label' => "Accès stocks",
			'attr'  => [
				'data-toggle'   => "toggle",
				'data-on'       => "Oui",
				'data-off'      => "Non",
				'data-onstyle'  => "success",
				'data-offstyle' => "danger",
				"data-size"     => "sm"
			]
		] );
		$builder->add( "hasCaisse", "checkbox", [
			'label' => "Accès caisse",
			'attr'  => [
				'data-toggle'   => "toggle",
				'data-on'       => "Oui",
				'data-off'      => "Non",
				'data-onstyle'  => "success",
				'data-offstyle' => "danger",
				"data-size"     => "sm"
			]
		] );

		$builder->add( "permission", "entity", [
			'label'          => "Modèle de permission",
			'class'          => PermissionModel::class,
			'select-label'   => "custom",
			'target'         => "name",
			'hasCustomLabel' => true
		] );

	}
}