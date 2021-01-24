<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\Supplier;
use Entity\Log;
use Form\SupplierType;
use App\RouteAnnotation;
use stdClass;


class Supplier_Controller extends Controller {
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
		$this->helper->wp->addScript( 'chosen.jquery' );
		$this->helper->wp->addScript( 'bootstrap.bundle.min' );
		//Ajout des styles
		$this->helper->wp->getStyle( 'bootstrap' );
		$this->helper->wp->getStyle( 'TijaraShop' );
		$this->helper->wp->getStyle( 'datatables' );
		$this->helper->wp->getScript( 'jquery-3.4.1.min' );
		$this->helper->wp->getScript( 'datatables' );
		$this->helper->wp->getScript( 'chosen.jquery' );
		$this->helper->wp->getScript( 'bootstrap.bundle.min' );

	}

	/**
	 * @RouteAnnotation(parent="TijaraShop", title="Fournisseurs", slug="supplier", order=5)
	 */
	public function index() {
		$this->checkInstall();

		$em = $this->getManager()->getRepository( Supplier::class );

		$this->render( 'Supplier/index.html.twig', [
			'Suppliers' => $em->all(),
		] );
	}

	/**
	 * @RouteAnnotation(parent="null", title="addSupplier", slug="supplier/new")
	 */
	public function new() {
		$Supplier = new Supplier();
		$em       = $this->getManager()->getRepository( Supplier::class );
		$form     = $this->createForm( SupplierType::class, $Supplier );
		$request  = $this->request();
		$form->handleRequest( $this->request() );

		if ( $form->isSubmitted() && $form->isValid() ) {
			$Supplier->set( 'version', new \DateTime( 'now' ) );
			$directionName  = $request->request->get( 'directionName', "" );
			$directionMail  = $request->request->get( 'directionMail', "" );
			$directionPhone = $request->request->get( 'directionPhone', "" );

			$comptaName  = $request->request->get( 'comptaName', "" );
			$comptaMail  = $request->request->get( 'comptaMail', "" );
			$comptaPhone = $request->request->get( 'comptaPhone', "" );

			$comName  = $request->request->get( 'comName', "" );
			$comMail  = $request->request->get( 'comMail', "" );
			$comPhone = $request->request->get( 'comPhone', "" );

			$contact                 = new stdClass();
			$contact->directionName  = $directionName;
			$contact->directionMail  = $directionMail;
			$contact->directionPhone = $directionPhone;
			$contact->comptaName     = $comptaName;
			$contact->comptaMail     = $comptaMail;
			$contact->comptaPhone    = $comptaPhone;
			$contact->comName        = $comName;
			$contact->comMail        = $comMail;
			$contact->comPhone       = $comPhone;
			$contactStr              = json_encode( $contact, JSON_PRETTY_PRINT );
			if ( $contactStr !== false ) {
				$Supplier->set( 'contact', $contactStr );
			}

			if ( $em->save( $Supplier ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"Supplier",
						"Create",
						$Supplier->id,
						null,
						$Supplier
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "Supplier a bien été ajoutée" );
					$this->helper->url->redirect( $this->getRoute( 'TijaraShop/supplier' ) );

				} else {
					$em->delete( $Supplier );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
		}
		$this->render( 'Supplier/new.html.twig', [
			'form' => $form
		] );

	}

	/**
	 * @RouteAnnotation(parent="null", title="editSupplier", slug="supplier/edit")
	 */
	public function edit() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Supplier::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Supplier" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/supplier' ) );
		}
		$Supplier = $em->first( [ 'id' => $id ] );
		if ( $Supplier === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Supplier" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/supplier' ) );
		} else {
			/*$contact =
			$Supplier->directionName = $contact->directionName;
			$Supplier->directionMail = $contact->directionMail;
			$Supplier->directionPhone = $contact->directionPhone;

			$Supplier->comptaName = $contact->comptaName;
			$Supplier->comptaMail = $contact->comptaMail;
			$Supplier->comptaPhone = $contact->comptaPhone;

			$Supplier->comName = $contact->comName;
			$Supplier->comMail = $contact->comMail;
			$Supplier->comPhone = $contact->comPhone;*/
			$form = $this->createForm( SupplierType::class, $Supplier );

			$form->handleRequest( $request );
			if ( $form->isSubmitted() && $form->isValid() ) {


				$Supplier->set( 'version', new \DateTime( 'now' ) );
				$directionName  = $request->request->get( 'directionName', "" );
				$directionMail  = $request->request->get( 'directionMail', "" );
				$directionPhone = $request->request->get( 'directionPhone', "" );

				$comptaName  = $request->request->get( 'comptaName', "" );
				$comptaMail  = $request->request->get( 'comptaMail', "" );
				$comptaPhone = $request->request->get( 'comptaPhone', "" );

				$comName  = $request->request->get( 'comName', "" );
				$comMail  = $request->request->get( 'comMail', "" );
				$comPhone = $request->request->get( 'comPhone', "" );

				$contact                 = new stdClass();
				$contact->directionName  = $directionName;
				$contact->directionMail  = $directionMail;
				$contact->directionPhone = $directionPhone;
				$contact->comptaName     = $comptaName;
				$contact->comptaMail     = $comptaMail;
				$contact->comptaPhone    = $comptaPhone;
				$contact->comName        = $comName;
				$contact->comMail        = $comMail;
				$contact->comPhone       = $comPhone;
				$contactStr              = json_encode( $contact, JSON_PRETTY_PRINT );
				if ( $contactStr !== false ) {
					$Supplier->set( 'contact', $contactStr );
				}


				$oldSupplier = $em->first( [ 'id' => $id ] );
				if ( $em->save( $Supplier ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"Supplier",
							"Edit",
							$Supplier->id,
							$oldSupplier,
							$Supplier
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "Supplier a bien été modifiée" );
					} else {
						$em->save( $oldSupplier );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
			}

			$this->render( 'Supplier/edit.html.twig', [
				'form'    => $form,
				'contact' => json_decode( $Supplier->contact )
			] );

		}
	}

	/**
	 * @RouteAnnotation(parent="null", title="readSupplier", slug="supplier/read")
	 */
	public function read() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Supplier::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Supplier" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/supplier' ) );
		}
		$Supplier = $em->first( [ 'id' => $id ] );
		if ( $Supplier === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Supplier" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/supplier' ) );
		} else {

			$this->render( 'Supplier/read.html.twig', [
				'Supplier' => $Supplier,
				'contact'  => json_decode( $Supplier->contact )
			] );

		}
	}


	/**
	 * @RouteAnnotation(parent="null", title="deleteSupplier", slug="supplier/delete")
	 */
	public function delete() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Supplier::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Supplier" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/supplier' ) );
		}
		$Supplier = $em->first( [ 'id' => $id ] );
		if ( $Supplier === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Supplier" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/supplier' ) );
		} else {
			$oldSupplier = $em->first( [ 'id' => $id ] );
			if ( $em->delete( $Supplier ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"Supplier",
						"Delete",
						$oldSupplier->id,
						$oldSupplier,
						null
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "Supplier a bien été supprimé" );
				} else {
					$em->save( $oldSupplier );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/supplier' ) );
		}
	}

}