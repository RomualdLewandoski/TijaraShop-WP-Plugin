<?php

namespace App;

use App\System;
use Form\AbstractType;
use Form\FormBuilder;
use Spot\Entity;

class Controller extends System {
	public function __construct() {
		$this->loadModel( 'install' );
		$this->loadHelper( 'url' );

	}


	function checkInstall() {
		if ( ! $this->model->install->isInstall() ) {
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/install" );
		}
	}

	function createForm( $type, Entity $entity = null ) {
		return ( new FormBuilder() )->createForm( $type, $entity );
	}


}