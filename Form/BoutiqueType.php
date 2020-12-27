<?php


namespace Form;


class BoutiqueType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "nom", "string" );
$builder->add( "isDefault", "checkbox" );

	}
}