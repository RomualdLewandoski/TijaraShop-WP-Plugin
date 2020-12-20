<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\Categorie;
use Entity\Log;
use Form\CategorieType;
use App\RouteAnnotation;


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

	/**
	 * @RouteAnnotation(parent="TijaraShop", title="Catégorie", slug="cat")
	 */
	public function index() {
		$this->checkInstall();
		$cat  = new Categorie();
		$em   = $this->getManager()->getRepository( Categorie::class );
		$form = $this->createForm( CategorieType::class, $cat );

		$form->handleRequest( $this->request() );

		if ( $form->isSubmitted() && $form->isValid() ) {

			if ( $em->save( $cat ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"Categorie",
						"Create",
						$cat->id,
						null,
						$cat
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "La Catégorie a bien été ajoutée" );
				} else {
					$em->delete( $cat );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
		}

		$this->render( 'categorie/index.html.twig', [
			'cats'   => $em->getNonParent(),
			'listed' => $em->getCatListed(),
			'form'   => $form
		] );
	}

	/**
	 * @RouteAnnotation(parent="null", title="subCat", slug="cat/sub")
	 */
	public function subCat() {
		$this->checkInstall();
		$cat  = new Categorie();
		$em   = $this->getManager()->getRepository( Categorie::class );
		$form = $this->createForm( CategorieType::class, $cat );

		$form->handleRequest( $this->request() );
		if ( $form->isSubmitted() && $form->isValid() ) {
			if ( $em->save( $cat ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"Categorie",
						"Create",
						$cat->id,
						null,
						$cat
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "La Catégorie a bien été ajoutée" );
				} else {
					$em->delete( $cat );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
		}

		$id = $this->request()->get( 'catId' );

		$parent = $em->first( [ 'id' => $id ] );
		$this->render( 'categorie/index.html.twig', [
			'sub'    => true,
			'parent' => $parent,
			'cats'   => $parent->getChild,
			'listed' => $em->getCatListed(),
			'form'   => $form
		] );
	}

	/**
	 * @RouteAnnotation(parent="null", title="editCat", slug="cat/edit")
	 */
	public function edit() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Categorie::class );
		$request = $this->request();
		$catId   = $request->query->get( 'catId' );
		if ( $catId == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this category" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/cat' ) );
		}
		$cat = $em->first( [ 'id' => $catId ] );
		if ( $cat === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown category" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/cat' ) );
		} else {
			$form = $this->createForm( CategorieType::class, $cat );

			$form->handleRequest( $request );
			if ( $form->isSubmitted() && $form->isValid() ) {
				$oldCat = $em->first( [ 'id' => $catId ] );
				if ( $em->save( $cat ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"Categorie",
							"Edit",
							$cat->id,
							$oldCat,
							$cat
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "La Catégorie a bien été modifiée" );
					} else {
						$em->save( $oldCat );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
			}

			$this->render( 'categorie/read.html.twig', [
				'form'   => $form,
				'listed' => $em->getCatListed(),
				'cat'    => $cat
			] );


		}
	}

	/**
	 * @RouteAnnotation(parent="null", title="deleteCat", slug="cat/delete")
	 */
	public function delete() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Categorie::class );
		$request = $this->request();
		$catId   = $request->query->get( 'catId' );
		if ( $catId == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this category" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/cat' ) );
		}
		$cat = $em->first( [ 'id' => $catId ] );
		if ( $cat === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown category" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/cat' ) );
		} else {
			if ( count( $cat->getChild ) != 0 ) {
				( new Session_Helper() )
					->set_flashdata( 'error', "Can't delete category cause children are present delete or move them before" );
				$this->helper->url->redirect( $this->getRoute( 'TijaraShop/cat' ) );
			} else {
				$oldCat = $em->first( [ 'id' => $catId ] );
				if ( $em->delete( $cat ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"Categorie",
							"Delete",
							$oldCat->id,
							$oldCat,
							null
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "La Catégorie a bien été supprimée" );
					} else {
						$em->save( $oldCat );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
				$this->helper->url->redirect( $this->getRoute( 'TijaraShop/cat' ) );
			}


		}
	}

}