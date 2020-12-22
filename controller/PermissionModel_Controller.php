<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\PermissionModel;
use Entity\Log;
use Form\PermissionModelType;
use App\RouteAnnotation;


class PermissionModel_Controller extends Controller {
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
	 * @RouteAnnotation(parent="TijaraShop", title="PermissionModel", slug="permissionmodel")
	 */
	public function index() {
		$this->checkInstall();

		$em = $this->getManager()->getRepository( PermissionModel::class );

		$this->render( 'PermissionModel/index.html.twig', [
			'PermissionModels' => $em->all(),
		] );
	}

	/**
	 * @RouteAnnotation(parent="null", title="addPermissionModel", slug="permissionmodel/new")
	 */
	public function new() {
		$PermissionModel = new PermissionModel();
		$em              = $this->getManager()->getRepository( PermissionModel::class );
		$form            = $this->createForm( PermissionModelType::class, $PermissionModel );

		$form->handleRequest( $this->request() );

		if ( $form->isSubmitted() && $form->isValid() ) {
			$PermissionModel->set( 'version', new \DateTime( 'now' ) );

			if ( $em->save( $PermissionModel ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"PermissionModel",
						"Create",
						$PermissionModel->id,
						null,
						$PermissionModel
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "PermissionModel a bien été ajoutée" );
					$this->helper->url->redirect( $this->getRoute( 'TijaraShop/permissionmodel' ) );

				} else {
					$em->delete( $PermissionModel );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
		}
		$this->render( 'PermissionModel/new.html.twig', [
			'form' => $form
		] );

	}

	/**
	 * @RouteAnnotation(parent="null", title="editPermissionModel", slug="permissionmodel/edit")
	 */
	public function edit() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( PermissionModel::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this PermissionModel" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/permissionmodel' ) );
		}
		$PermissionModel = $em->first( [ 'id' => $id ] );
		if ( $PermissionModel === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown PermissionModel" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/permissionmodel' ) );
		} else {
			$form = $this->createForm( PermissionModelType::class, $PermissionModel );

			$form->handleRequest( $request );
			if ( $form->isSubmitted() && $form->isValid() ) {
				$PermissionModel->set( 'version', new \DateTime( 'now' ) );

				$oldPermissionModel = $em->first( [ 'id' => $id ] );
				if ( $em->save( $PermissionModel ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"PermissionModel",
							"Edit",
							$PermissionModel->id,
							$oldPermissionModel,
							$PermissionModel
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "PermissionModel a bien été modifiée" );
					} else {
						$em->save( $oldPermissionModel );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
			}

			$this->render( 'PermissionModel/edit.html.twig', [
				'form' => $form,
			] );

		}
	}

	/**
	 * @RouteAnnotation(parent="null", title="readPermissionModel", slug="permissionmodel/read")
	 */
	public function read() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( PermissionModel::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this PermissionModel" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/permissionmodel' ) );
		}
		$PermissionModel = $em->first( [ 'id' => $id ] );
		if ( $PermissionModel === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown PermissionModel" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/permissionmodel' ) );
		} else {

			$this->render( 'PermissionModel/read.html.twig', [
				'PermissionModel' => $PermissionModel
			] );

		}
	}


	/**
	 * @RouteAnnotation(parent="null", title="deletePermissionModel", slug="permissionmodel/delete")
	 */
	public function delete() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( PermissionModel::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this PermissionModel" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/permissionmodel' ) );
		}
		$PermissionModel = $em->first( [ 'id' => $id ] );
		if ( $PermissionModel === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown PermissionModel" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/permissionmodel' ) );
		} else {
			$oldPermissionModel = $em->first( [ 'id' => $id ] );
			if ( $em->delete( $PermissionModel ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"PermissionModel",
						"Delete",
						$oldPermissionModel->id,
						$oldPermissionModel,
						null
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "PermissionModel a bien été supprimé" );
				} else {
					$em->save( $oldPermissionModel );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/permissionmodel' ) );
		}
	}

}