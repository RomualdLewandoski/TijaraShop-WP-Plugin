<?php


namespace App\Components;


class SelectType extends ComponentType
{

    public function __construct($name, $options, $value)
    {

        parent::__construct($name, $options, $value);
    }

    public function generate($isInline = false, $grouped = true)
    {

    }
}