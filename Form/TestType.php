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
				'class' => "form-control",
				'id'    => 'myTitleId'
			]
		] );
		$builder->add( 'message', 'text', [] );
	}
}