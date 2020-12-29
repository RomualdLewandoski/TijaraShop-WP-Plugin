<?php


namespace App\Controller;


use App\Controller;
use App\RouteAnnotation;

class Main_Controller extends Controller {
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

	public function index(){
        $this->checkInstall();
	    $this->render( 'Main/index.html.twig', [
            'config' => (new Install_Controller())->getConfig()
        ]);

	}

}