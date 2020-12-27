<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\Login;
use Entity\Log;
use Form\LoginType;
use App\RouteAnnotation;


class Login_Controller extends Controller {
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
	 * @RouteAnnotation(parent="TijaraShop", title="Login", slug="login")
	 */
	public function index() {
		$this->checkInstall();

		$em = $this->getManager()->getRepository( Login::class );

		$this->render( 'Login/index.html.twig', [
			'Logins' => $em->all(),
		] );
	}

	/**
	 * @RouteAnnotation(parent="null", title="addLogin", slug="login/new")
	 */
	public function new() {
		$Login = new Login();
		$em    = $this->getManager()->getRepository( Login::class );
		$form  = $this->createForm( LoginType::class, $Login );
		$request = $this->request();
		$form->handleRequest( $this->request() );

		if ( $form->isSubmitted() && $form->isValid() ) {
			$Login->set('version', new \DateTime('now'));
			//todo check if pass == null if yes auto createit and set isDefaultPass to true else encode it on bcrypt + isDefaultPass = false
			//todo check permission if 0 do nothing else each perms needs to be edited related to selectedPermissionModel
			if ( $em->save( $Login ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"Login",
						"Create",
						$Login->id,
						null,
						$Login
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "Login a bien été ajoutée" );
					$this->helper->url->redirect( $this->getRoute( 'TijaraShop/login' ) );

				} else {
					$em->delete( $Login );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
		}
		$this->render( 'Login/new.html.twig', [
			'form' => $form
		] );

	}

	/**
	 * @RouteAnnotation(parent="null", title="editLogin", slug="login/edit")
	 */
	public function edit() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Login::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Login" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/login' ) );
		}
		$Login = $em->first( [ 'id' => $id ] );
		if ( $Login === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Login" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/login' ) );
		} else {
			$form = $this->createForm( LoginType::class, $Login );

			$form->handleRequest( $request );
			if ( $form->isSubmitted() && $form->isValid() ) {
				$oldLogin = $em->first( [ 'id' => $id ] );
				if ( $em->save( $Login ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"Login",
							"Edit",
							$Login->id,
							$oldLogin,
							$Login
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "Login a bien été modifiée" );
					} else {
						$em->save( $oldLogin );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
			}

			$this->render( 'Login/edit.html.twig', [
				'form' => $form,
			] );

		}
	}

	/**
	 * @RouteAnnotation(parent="null", title="readLogin", slug="login/read")
	 */
	public function read() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Login::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Login" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/login' ) );
		}
		$Login = $em->first( [ 'id' => $id ] );
		if ( $Login === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Login" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/login' ) );
		} else {

			$this->render( 'Login/read.html.twig', [
				'Login' => $Login
			] );

		}
	}


	/**
	 * @RouteAnnotation(parent="null", title="deleteLogin", slug="login/delete")
	 */
	public function delete() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Login::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Login" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/login' ) );
		}
		$Login = $em->first( [ 'id' => $id ] );
		if ( $Login === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Login" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/login' ) );
		} else {
			$oldLogin = $em->first( [ 'id' => $id ] );
			if ( $em->delete( $Login ) ) {
				if ( ( new Log_Model() )
					->log( null,
						"Login",
						"Delete",
						$oldLogin->id,
						$oldLogin,
						null
					) ) {
					( new Session_Helper() )
						->set_flashdata( "success", "Login a bien été supprimé" );
				} else {
					$em->save( $oldLogin );
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
				}
			} else {
				( new Session_Helper() )
					->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
			}
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/login' ) );
		}
	}

}