<?php


namespace Form;


class TestType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {
		$builder->add( 'titre', 'select', [
			'choice'   => [
				"val1" => "name1",
				"val2" => "name2",
				"val3" => "name3",
			],
			'required' => false,
			'label'    => "toto",
			'attr'     => [
				'id' => 'myTitleId'
			]
		] );
		$builder->add( 'message', 'string', [
			'attr' => [
				'placeholder' => "Message ici"
			]
		] );
		$builder->add( 'textArea', 'text' );
		$builder->add( 'isDefault', "checkbox" );
		$builder->add('numberType', 'number');
	}
}