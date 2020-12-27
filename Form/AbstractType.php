<?php


namespace Form;


abstract class AbstractType {

	abstract public function buildForm( FormBuilder $builder );
}