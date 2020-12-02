<?php


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
		$request         = $this->request();
		$action          = $request->get( 'action' );
		$data['pageUrl'] = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$data['error']   = $this->helper->session->flashdata( "error" );
		$data['success'] = $this->helper->session->flashdata( "success" );

		if ( $action == null ) {

			$this->listBrand( $data );
		}
	}

	public function listBrand( $data ) {
		$data['brands'] = $this->model->brand->listBrands();
		$this->loadView( 'brand/brandList', $data );
	}
}