<?php


namespace App\Components;


use HtmlObject\Element;

class CheckType extends ComponentType
{

    public function __construct($name, $options, $value)
    {
        $options['attr']['type'] = "checkbox";
        str_replace('form-control', '', $options['attr']['class']);
        $options['attr']['class'] = "form-check-input" . $options['attr']['class'];
        if ($value) {
            $options['attr']['checked'] = "checked";
        }
        $value = null;
        parent::__construct($name, $options, $value);

    }

    public function generate($isInline = false, $grouped = false)
    {


        $elem = Element::create('div');


        if ($isInline) {
            if ($grouped) {
                $elem = Element::create('div', null, ['class' => "form-group"]);
            } else {
                $elem = Element::create('div', null, ['class' => "form-group"]);
            }
        } else if ($grouped) {
            $elem = Element::create('div', null, ['class' => "form-group"]);
        }


        $input = Element::create('input', $this->value, $this->options['attr']);

        $elem->setChild($input);


        if ($this->options['hasLabel']) {
            if ($isInline) {
                $label = Element::create('label', $this->options['label'], ['for' => $this->options['id'], 'class' => "form-check-label"]);

            } else {
                $label = Element::create('label', $this->options['label'], ['for' => $this->options['id'], 'class' => "form-check-label"]);

            }
            $elem->setChild($label);
        }


        return $elem;
    }
}