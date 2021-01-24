<?php

namespace App\Components;

abstract class ComponentType
{
    protected $name;
    protected $options;
    protected $value;

    public function __construct($name, $options, $value)
    {
        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
    }

    abstract public function generate($isInline = false, $grouped = true);

}