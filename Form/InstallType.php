<?php


namespace Form;


class InstallType extends AbstractType
{

    public function buildForm(FormBuilder $builder)
    {
        $builder->add('url', 'string', [
            'label' => "Url du site",
            'required' => true,
            'mapped' => false,
            'attr' => [
                'placeholder' => "http://google.com"
            ]
        ]);
        $builder->add('install', 'select', [
            'choice' => [
                "nope" => "--- Choisir une méthode d installation ---",
                'install' => "Installation",
                'update' => "Mise a jour"
            ],
            'required' => true,
            'label' => false,
            'mapped' => false,
            'attr'  =>[
                'class'=>"custom-select"
            ]
        ]);
        $builder->add('apiKey', 'string', [
            'label' => 'Clé api',
            'required' => false,
            'mapped' => false,
            'attr' => [
                'placeholder' => "Laissez vide pour auto générer la clé (recommandé)"
            ]
        ]);
        $builder->add('userName', 'string', [
            'label' => "Nom du compte",
            'required' => true,
            'mapped' => false,
            'attr' => [
                'placeholder' => "admin"
            ]
        ]);
        $builder->add("password", 'password', [
            'label' => 'Mot de passe',
            'required' => true,
            'mapped' => false,
            'attr'=>[
                'placeholder' => "Mot de passe"
            ]
        ]);
        $builder->add("passwordConf", 'password', [
            'label' => 'Confirmation du mot de passe',
            'required' => false,
            'mapped' => false,
            'attr' => [
                'placeholder' => "Confirmation du mot de passe"
            ]
        ]);

    }
}
