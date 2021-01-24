<?php


namespace App\Components;


use HtmlObject\Element;

class EmailType extends ComponentType
{

    public function __construct($name, $options, $value)
    {
        $options['attr']['type'] = "email";
        parent::__construct($name, $options, $value);

    }

    public function generate($isInline = false, $grouped = false)
    {


        $elem = Element::create('div');

        if ($isInline) {
            if ($grouped) {
                $elem = Element::create('div', null, ['class' => "form-group row"]);
            } else {
                $elem = Element::create('div', null, ['class' => "row"]);
            }
        } else if ($grouped) {
            $elem = Element::create('div', null, ['class' => "form-group"]);
        }

        if ($this->options['hasLabel']) {
            if ($isInline){
                $label = Element::create('label', $this->options['label'], ['for' => $this->options['id'], 'class'=>"col-sm-2 col-form-label"]);

            }else{
                $label = Element::create('label', $this->options['label'], ['for' => $this->options['id']]);

            }
            $elem->setChild($label);
        }
        if ($isInline){
            $tempo = Element::create('input', $this->value, $this->options['attr']);
            $input = Element::create('div', null, ['class'=>"col-sm-10"]);
            $input->setChild($tempo);
        }else{
            $input = Element::create('input', $this->value, $this->options['attr']);
            $elem->setChild($input);
        }


        return $elem;
    }
}