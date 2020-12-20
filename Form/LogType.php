<?php


namespace Form;


class LogType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "user", "string" );
$builder->add( "date", "datetime" );
$builder->add( "type", "string" );
$builder->add( "action", "string" );
$builder->add( "target", "number" );
$builder->add( "before", "text" );
$builder->add( "after", "text" );

	}
}