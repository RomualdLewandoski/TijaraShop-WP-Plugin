<?php


namespace Form;


use Entity\Categorie;
use Entity\PermissionModel;

class ProductType extends AbstractType {


	public function buildForm( FormBuilder $builder ) {

		$builder->add( "Designiation", "string" );
$builder->add( "label", "string" );
$builder->add( "codeBarre", "string" );
$builder->add( "refArticle", "string" );
$builder->add( "refFournisseur", "string" );
$builder->add( "Poid", "float" );
$builder->add( "Hauteur", "float" );
$builder->add( "Largeur", "float" );
$builder->add( "Longueur", "float" );
$builder->add( "prixAchat", "float" );
$builder->add( "prixVente", "float" );
$builder->add( "tva", "float" );
$builder->add( "stockMin", "number" );
$builder->add( "descriptionCourte", "text" );
$builder->add( "description", "text" );
$builder->add( "version", "datetime" );
$builder->add( "isOnWeb", "checkbox" );
$builder->add( "brand_id", "number" );
$builder->add("categories", "entity", [
    'label'          => "Catégorie",
    'class'          => Categorie::class,
    'select-label'   => "custom",
    'target'         => "nom",
    'hasCustomLabel' => true,
    'mapped' => false
] );
	}
}