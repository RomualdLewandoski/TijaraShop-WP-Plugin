<?php


namespace App\Components;


class FormComponent
{

    private $entity;
    /**
     * @var ComponentType[]
     */
    private $fields = [];

    public function __construct($entity = null)
    {
        $this->entity = $entity;


    }

    public function add($name, $type, $options)
    {

        $value = null;
        if ($this->entity != null && $this->entity->get($name) != false) {
            $value = $this->entity->get($name);
        }

        if ($options['mapped'] !== null && $options['mapped'] == false) {
            $value = null;
        }

        if ($value == null && $options['value'] !== null){
            $value = $options['value'];
        }

        if ($options['id'] === null) {
            $options['id'] = $name . "Id";
            $options['attr']['id'] = $options['id'];
        }
        $options['attr']['name'] = $name;

        if ($options['required'] === null || $options['required'] == true){
            $options['attr']['required'] = "required";
        }

        if ($options['hasLabel'] === null) {
            $options['hasLabel'] = true;
        }

        if ($options['label'] === null) {
            $options['label'] = ucfirst($name);
        }

        str_replace("form-control", "", $options['attr']['class']);
        $options['attr']['class'] = "form-control" . $options['attr']['class'];

        $newFiled = new $type($name, $options, $value);
        $this->fields[] = $newFiled;

        return $this;
    }

    public function render($isInline = false, $grouped = true)
    {
        $builder = "";
        foreach ($this->fields as $field) {
            $builder .= $field->generate($isInline, $grouped);
        }
        return $builder;
    }

}