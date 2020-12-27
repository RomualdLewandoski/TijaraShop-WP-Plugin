<?php


namespace Form;

class TempoType extends AbstractType {

	public function buildForm( FormBuilder $builder ) {
		$builder->add( 'name', 'string' );
		$builder->add( 'type', 'select', [
			'choice'   => [
				'1' => "Val1",
				'2' => "Val2",
				'3' => "Val3",
				'4' => "Val4"
			],
			'required' => true
		] );
		$builder->add( 'description', 'text', [
			'required' => false
		] );
		$builder->add( 'isActive', 'checkbox', [
			'required' => true
		] );
		$builder->add( 'created', 'datetime', [
			'required' => true
		] );
		$builder->add( 'color', 'color', [
			'required' => true,
		] );
	}
}