<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\Brand;
use Entity\Log;
use Form\BrandType;
use App\RouteAnnotation;


class Brand_Controller extends Controller {
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
	 * @RouteAnnotation(parent="TijaraShop", title="Marques", slug="brand")
	 */
	public function index() {
		$this->checkInstall();

		$em   = $this->getManager()->getRepository( Brand::class );

		$this->render( 'Brand/index.html.twig', [
			'Brands'   => $em->all(),
		] );
	}

	/**
	 * @RouteAnnotation(parent="null", title="addBrand", slug="brand/new")
	 */
	public function new(){
        $Brand  = new Brand();
		$em   = $this->getManager()->getRepository( Brand::class );
		$form = $this->createForm( BrandType::class, $Brand );

		$form->handleRequest( $this->request() );

		if ( $form->isSubmitted() && $form->isValid() ) {

			if ( $em->save( $Brand ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"Brand",
						"Create",
						$Brand->id,
						null,
						$Brand
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "Brand a bien été ajoutée" );
						$this->helper->url->redirect( $this->getRoute( 'TijaraShop/brand' ) );

				} else {
					$em->delete( $Brand );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
		}
		$this->render( 'Brand/new.html.twig', [
            'form'   => $form
        ] );

	}

	/**
	 * @RouteAnnotation(parent="null", title="editBrand", slug="brand/edit")
	 */
	public function edit() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( Brand::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Brand" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/brand' ) );
		}
		$Brand = $em->first( [ 'id' => $id ] );
		if ( $Brand === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Brand" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/brand' ) );
		} else {
			$form = $this->createForm( BrandType::class, $Brand );

			$form->handleRequest( $request );
			if ( $form->isSubmitted() && $form->isValid() ) {
				$oldBrand = $em->first( [ 'id' => $id ] );
				if ( $em->save( $Brand ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"Brand",
							"Edit",
							$Brand->id,
							$oldBrand,
							$Brand
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "Brand a bien été modifiée" );
					} else {
						$em->save( $oldBrand );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
			}

			$this->render( 'Brand/edit.html.twig', [
				'form'   => $form,
			] );

		}
	}

	/**
	 * @RouteAnnotation(parent="null", title="readBrand", slug="brand/read")
	 */
	public function read() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( Brand::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Brand" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/brand' ) );
		}
		$Brand = $em->first( [ 'id' => $id ] );
		if ( $Brand === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Brand" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/brand' ) );
		} else {

			$this->render( 'Brand/read.html.twig', [
				'Brand'   => $Brand
			] );

		}
	}


	/**
	 * @RouteAnnotation(parent="null", title="deleteBrand", slug="brand/delete")
	 */
	public function delete() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( Brand::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Brand" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/brand' ) );
		}
		$Brand = $em->first( [ 'id' => $id ] );
		if ( $Brand === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Brand" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/brand' ) );
		} else {
            $oldBrand = $em->first( [ 'id' => $id ] );
            if ( $em->delete( $Brand ) ) {
                if ( ( new Log_Model() )
                    ->log( null,
                        "Brand",
                        "Delete",
                        $oldBrand->id,
                        $oldBrand,
                        null
                    ) ) {
                    ( new Session_Helper() )
                        ->set_flashdata( "success", "Brand a bien été supprimé" );
                } else {
                    $em->save( $oldBrand );
                    ( new Session_Helper() )
                        ->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
                }
            } else {
                ( new Session_Helper() )
                    ->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
            }
            $this->helper->url->redirect( $this->getRoute( 'TijaraShop/brand' ) );
		}
	}

}