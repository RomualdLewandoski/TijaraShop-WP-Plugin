<?php

namespace App\Controller;

use App\Controller;

class Brand_Controller extends Controller {
	public function __construct() {
		$this->loadModel( 'install' );
		$this->loadModel( 'brand' );

		$this->loadModel( "log" );
		$this->loadHelper( 'wp' );
		$this->loadHelper( 'form' );
		$this->loadHelper( 'session' );
		$this->loadHelper( 'url' );

		//Chargement des styles
		$this->helper->wp->addStyle( 'bootstrap' );
		$this->helper->wp->addStyle( 'TijaraShop' );
		$this->helper->wp->addStyle( 'datatables' );
		$this->helper->wp->addScript( 'jquery-3.4.1.min' );
		$this->helper->wp->addScript( 'datatables' );
		$this->helper->wp->addScript( 'bootstrap.bundle.min' );
		//Ajout des styles
		$this->helper->wp->getStyle( 'bootstrap' );
		$this->helper->wp->getStyle( 'TijaraShop' );
		$this->helper->wp->getStyle( 'datatables' );
		$this->helper->wp->getScript( 'jquery-3.4.1.min' );
		$this->helper->wp->getScript( 'datatables' );
		$this->helper->wp->getScript( 'bootstrap.bundle.min' );
	}

	public function index() {
		$this->checkInstall();
		$request = $this->request();
		$action  = $request->get( 'action' );
		$data    = [];

		if ( $action == null ) {
			$this->listBrand( $data );
		} else if ( $action == "addBrand" ) {
			$this->addBrand( $request );
		} else if ( $action == "editBrand" ) {
			$this->editBrand( $request );
		} else if ( $action == "deleteBrand" ) {
			$this->model->brand->deleteBrand( $request );
		}
	}

	public function listBrand( $data ) {
		$data['brands'] = $this->model->brand->listBrands();
		$this->loadView( 'brand/brandList', $data );
	}

	public function addBrand( $request ) {
		if ( $this->helper->form->verify( [ 'brandName' ] ) ) {
			$this->model->brand->addBrand( $request );
		} else {
			$this->helper->session->set_flashdata( "error", "Des champs sont manquants dans le formulaire d'ajout de la marque" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
		}
	}

	public function editBrand( $request ) {
		if ( $this->helper->form->verify( [ 'brandName' ] ) ) {
			$this->model->brand->editBrand( $request );
		} else {
			$this->helper->session->set_flashdata( "error", "Des champs sont manquants dans le formulaire d'édition de la marque" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
		}
	}
}