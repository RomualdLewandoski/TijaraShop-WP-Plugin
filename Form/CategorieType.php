<?php


namespace Form;


use Entity\Categorie;

class CategorieType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "nom", "string" );
		$builder->add( "position", "number" );
		$builder->add( "parent", "entity", [
			'class'  => Categorie::class,
			'target' => "getName",
			'getCatListed' => true,
			'select-label' => "------CHOISIR UN PARENT-----"
		] );

	}
}