<?php


namespace Form;


class BrandType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "nom", "string" );
$builder->add( "position", "number" );

	}
}