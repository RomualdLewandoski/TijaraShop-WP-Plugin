<?php

namespace App;

use App\System;
use Entity\Config;
use Form\AbstractType;
use Form\FormBuilder;
use Spot\Entity;

class Controller extends System {
	public function __construct() {
		$this->loadModel( 'install' );
		$this->loadHelper( 'url' );

	}


	function checkInstall() {
        $em = $this->getManager()->getRepository(Config::class);
        $config = $em->first(['id' => 1]);
        if ($config != false) {
            if( $config->step != 1){
                $this->helper->url->redirect($this->getRoute('TijaraShop/install'));
            }
        } else {
            $this->helper->url->redirect($this->getRoute('TijaraShop/install'));
        }
	}

	function createForm( $type, Entity $entity = null ) {
		return ( new FormBuilder() )->createForm( $type, $entity );
	}


}