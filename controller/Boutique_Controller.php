<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\Boutique;
use Entity\Log;
use Form\BoutiqueType;
use App\RouteAnnotation;


class Boutique_Controller extends Controller {
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
	 * @RouteAnnotation(parent="TijaraShop", title="Boutique", slug="boutique", order=1)
	 */
	public function index() {
		$this->checkInstall();

		$em   = $this->getManager()->getRepository( Boutique::class );

		$this->render( 'Boutique/index.html.twig', [
			'Boutiques'   => $em->all(),
		] );
	}

	/**
	 * @RouteAnnotation(parent="null", title="addBoutique", slug="boutique/new")
	 */
	public function new(){
        $Boutique  = new Boutique();
		$em   = $this->getManager()->getRepository( Boutique::class );
		$form = $this->createForm( BoutiqueType::class, $Boutique );

		$form->handleRequest( $this->request() );

		if ( $form->isSubmitted() && $form->isValid() ) {

			if ( $em->save( $Boutique ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"Boutique",
						"Create",
						$Boutique->id,
						null,
						$Boutique
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "Boutique a bien été ajoutée" );
						$this->helper->url->redirect( $this->getRoute( 'TijaraShop/boutique' ) );

				} else {
					$em->delete( $Boutique );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
		}
		$this->render( 'Boutique/new.html.twig', [
            'form'   => $form
        ] );

	}

	/**
	 * @RouteAnnotation(parent="null", title="editBoutique", slug="boutique/edit")
	 */
	public function edit() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( Boutique::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Boutique" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/boutique' ) );
		}
		$Boutique = $em->first( [ 'id' => $id ] );
		if ( $Boutique === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Boutique" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/boutique' ) );
		} else {
			$form = $this->createForm( BoutiqueType::class, $Boutique );

			$form->handleRequest( $request );
			if ( $form->isSubmitted() && $form->isValid() ) {
				$oldBoutique = $em->first( [ 'id' => $id ] );
				if ( $em->save( $Boutique ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"Boutique",
							"Edit",
							$Boutique->id,
							$oldBoutique,
							$Boutique
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "Boutique a bien été modifiée" );
					} else {
						$em->save( $oldBoutique );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
			}

			$this->render( 'Boutique/edit.html.twig', [
				'form'   => $form,
			] );

		}
	}

	/**
	 * @RouteAnnotation(parent="null", title="readBoutique", slug="boutique/read")
	 */
	public function read() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( Boutique::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Boutique" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/boutique' ) );
		}
		$Boutique = $em->first( [ 'id' => $id ] );
		if ( $Boutique === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Boutique" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/boutique' ) );
		} else {

			$this->render( 'Boutique/read.html.twig', [
				'Boutique'   => $Boutique
			] );

		}
	}


	/**
	 * @RouteAnnotation(parent="null", title="deleteBoutique", slug="boutique/delete")
	 */
	public function delete() {
		$this->checkInstall();
		$em   = $this->getManager()->getRepository( Boutique::class );
		$request = $this->request();
		$id   = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Boutique" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/boutique' ) );
		}
		$Boutique = $em->first( [ 'id' => $id ] );
		if ( $Boutique === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Boutique" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/boutique' ) );
		} else {
            $oldBoutique = $em->first( [ 'id' => $id ] );
            if ( $em->delete( $Boutique ) ) {
                if ( ( new Log_Model() )
                    ->log( null,
                        "Boutique",
                        "Delete",
                        $oldBoutique->id,
                        $oldBoutique,
                        null
                    ) ) {
                    ( new Session_Helper() )
                        ->set_flashdata( "success", "Boutique a bien été supprimé" );
                } else {
                    $em->save( $oldBoutique );
                    ( new Session_Helper() )
                        ->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
                }
            } else {
                ( new Session_Helper() )
                    ->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
            }
            $this->helper->url->redirect( $this->getRoute( 'TijaraShop/boutique' ) );
		}
	}

}