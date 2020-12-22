<?php


namespace Form;


class LoginType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "username", "string" );
$builder->add( "password", "text" );
$builder->add( "hasAdmin", "checkbox" );
$builder->add( "hasCompta", "checkbox" );
$builder->add( "hasProductManagement", "checkbox" );
$builder->add( "hasSupplierManagement", "checkbox" );
$builder->add( "hasStock", "checkbox" );
$builder->add( "hasCaisse", "checkbox" );
$builder->add( "isDefaultPass", "checkbox" );
$builder->add( "version", "datetime" );

	}
}