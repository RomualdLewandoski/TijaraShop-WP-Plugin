<?php
namespace App\Controller;

use App\Controller;

class Cat_Controller extends Controller {
	public function __construct() {
		$this->loadModel( 'install' );
		$this->loadModel( 'cat' );

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
			$data['cats'] = $this->model->cat->listCats();
			$this->listCat( $data );
		} else if ( $action == "addCat" ) {
			$this->addCat( $request );
		} else if ( $action == "listSub" ) {
			$this->listSub( $request, $data );
		} else if ( $action == "editCat" ) {
			$this->editCat( $request );
		} else if ( $action == "deleteCat" ) {
			$this->model->cat->delete($request);
		}

	}

	public function listCat( $data ) {
		$data['sub']    = false;
		$data['listed'] = $this->model->cat->getCatListed();
		$this->loadView( 'categorie/catList', $data );
	}

	public function listSub( $request, $data ) {
		$id             = $request->get( 'catId' );
		$data['sub']    = true;
		$data['parent'] = $this->model->cat->getCatById( $id );
		$data['cats']   = $this->model->cat->listSubCat( $id );
		$data['listed'] = $this->model->cat->getCatListed();
		$this->loadView( 'categorie/catList', $data );
	}


	public function addCat( $request ) {
		if ( $this->helper->form->verify( [ 'catName' ] ) ) {
			$this->model->cat->addCat( $request );
		} else {
			$this->helper->session->set_flashdata( "error", "Des champs sont manquants dans le formulaire d'ajout de catégorie" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
		}
	}

	public function editCat( $request ) {
		if ( $this->helper->form->verify( [ 'catName' ] ) ) {
			$this->model->cat->editCat( $request );
		} else {
			$this->helper->session->set_flashdata( "error", "Des champs sont manquants dans le formulaire de modification de catégorie" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
		}
	}

}