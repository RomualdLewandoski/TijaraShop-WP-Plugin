<?php


namespace Form;


class WooCommerceApiType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "key", "text" );
$builder->add( "secret", "text" );

	}
}