<?php


namespace Form;


class ApiCredentialsType extends AbstractType
{

    public function buildForm(FormBuilder $builder)
    {
        $builder->add("privateKey", 'string', [
            'label' => "Clé Api",
            'required' => true
        ]);
    }
}