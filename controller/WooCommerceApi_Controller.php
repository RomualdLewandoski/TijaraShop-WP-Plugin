<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\WooCommerceApi;
use Entity\Log;
use Form\WooCommerceApiType;
use App\RouteAnnotation;


class WooCommerceApi_Controller extends Controller {
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

	/**
	 * @RouteAnnotation(parent="TijaraShop", title="WooCommerceApi", slug="woocommerceapi", order=998)
	 */
	public function index() {
		$this->checkInstall();

		$em   = $this->getManager()->getRepository( WooCommerceApi::class );

		$this->render( 'WooCommerceApi/index.html.twig', [
			'WooCommerceApis'   => $em->all(),
		] );
	}

	/**
	 * @RouteAnnotation(parent="null", title="addWooCommerceApi", slug="woocommerceapi/new")
	 */
	public function new(){
        $WooCommerceApi  = new WooCommerceApi();
		$em   = $this->getManager()->getRepository( WooCommerceApi::class );
		$form = $this->createForm( WooCommerceApiType::class, $WooCommerceApi );

		$form->handleRequest( $this->request() );

		if ( $form->isSubmitted() && $form->isValid() ) {

			if ( $em->save( $WooCommerceApi ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"WooCommerceApi",
						"Create",
						$WooCommerceApi->id,
						null,
						$WooCommerceApi
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "WooCommerceApi a bien été ajoutée" );
						$this->helper->url->redirect( $this->getRoute( 'TijaraShop/woocommerceapi' ) );

				} else {
					$em->delete( $WooCommerceApi );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
		}
		$this->render( 'WooCommerceApi/new.html.twig', [
            'form'   => $form
        ] );

	}

	/**
	 * @RouteAnnotation(parent="null", title="editWooCommerceApi", slug="woocommerceapi/edit")
	 */
	public function edit() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( WooCommerceApi::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this WooCommerceApi" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/woocommerceapi' ) );
		}
		$WooCommerceApi = $em->first( [ 'id' => $id ] );
		if ( $WooCommerceApi === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown WooCommerceApi" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/woocommerceapi' ) );
		} else {
			$form = $this->createForm( WooCommerceApiType::class, $WooCommerceApi );

			$form->handleRequest( $request );
			if ( $form->isSubmitted() && $form->isValid() ) {
				$oldWooCommerceApi = $em->first( [ 'id' => $id ] );
				if ( $em->save( $WooCommerceApi ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"WooCommerceApi",
							"Edit",
							$WooCommerceApi->id,
							$oldWooCommerceApi,
							$WooCommerceApi
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "WooCommerceApi a bien été modifiée" );
					} else {
						$em->save( $oldWooCommerceApi );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
			}

			$this->render( 'WooCommerceApi/edit.html.twig', [
				'form'   => $form,
			] );

		}
	}

	/**
	 * @RouteAnnotation(parent="null", title="readWooCommerceApi", slug="woocommerceapi/read")
	 */
	public function read() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( WooCommerceApi::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this WooCommerceApi" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/woocommerceapi' ) );
		}
		$WooCommerceApi = $em->first( [ 'id' => $id ] );
		if ( $WooCommerceApi === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown WooCommerceApi" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/woocommerceapi' ) );
		} else {

			$this->render( 'WooCommerceApi/read.html.twig', [
				'WooCommerceApi'   => $WooCommerceApi
			] );

		}
	}


	/**
	 * @RouteAnnotation(parent="null", title="deleteWooCommerceApi", slug="woocommerceapi/delete")
	 */
	public function delete() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( WooCommerceApi::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this WooCommerceApi" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/woocommerceapi' ) );
		}
		$WooCommerceApi = $em->first( [ 'id' => $id ] );
		if ( $WooCommerceApi === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown WooCommerceApi" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/woocommerceapi' ) );
		} else {
            $oldWooCommerceApi = $em->first( [ 'id' => $id ] );
            if ( $em->delete( $WooCommerceApi ) ) {
                if ( ( new Log_Model() )
                    ->log( null,
                        "WooCommerceApi",
                        "Delete",
                        $oldWooCommerceApi->id,
                        $oldWooCommerceApi,
                        null
                    ) ) {
                    ( new Session_Helper() )
                        ->set_flashdata( "success", "WooCommerceApi a bien été supprimé" );
                } else {
                    $em->save( $oldWooCommerceApi );
                    ( new Session_Helper() )
                        ->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
                }
            } else {
                ( new Session_Helper() )
                    ->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
            }
            $this->helper->url->redirect( $this->getRoute( 'TijaraShop/woocommerceapi' ) );
		}
	}

}