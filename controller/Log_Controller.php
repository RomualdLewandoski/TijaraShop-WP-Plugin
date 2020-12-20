<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Diff;
use App\Helper\Diff_Renderer_Html_SideBySide;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\Log;
use Form\LogType;
use App\RouteAnnotation;


class Log_Controller extends Controller {
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
	 * @RouteAnnotation(parent="TijaraShop", title="Log", slug="log")
	 */
	public function index() {
		$this->checkInstall();

		$em = $this->getManager()->getRepository( Log::class );

		$this->render( 'Log/index.html.twig', [
			'Logs' => $em->all(),
		] );
	}


	/**
	 * @RouteAnnotation(parent="null", title="editLog", slug="log/edit")
	 */
	public function edit() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Log::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Log" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/log' ) );
		}
		$Log = $em->first( [ 'id' => $id ] );
		if ( $Log === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Log" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/log' ) );
		} else {
			$form = $this->createForm( LogType::class, $Log );

			$form->handleRequest( $request );
			if ( $form->isSubmitted() && $form->isValid() ) {
				$oldLog = $em->first( [ 'id' => $id ] );
				if ( $em->save( $Log ) ) {
					if ( ( new Log_Model() )
						->log( null,
							"Log",
							"Edit",
							$Log->id,
							$oldLog,
							$Log
						) ) {
						( new Session_Helper() )
							->set_flashdata( "success", "Log a bien été modifiée" );
					} else {
						$em->save( $oldLog );
						( new Session_Helper() )
							->set_flashdata( "error", "Erreur lors de la création du log, l'action a été annulée" );
					}
				} else {
					( new Session_Helper() )
						->set_flashdata( "error", "Erreur lors de l'action, elle a été annulée" );
				}
			}

			$this->render( 'Log/edit.html.twig', [
				'form' => $form,
			] );

		}
	}

	/**
	 * @RouteAnnotation(parent="null", title="readLog", slug="log/read")
	 */
	public function read() {
		$this->checkInstall();
		$em      = $this->getManager()->getRepository( Log::class );
		$request = $this->request();
		$id      = $request->query->get( 'id' );
		if ( $id == null ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown id for this Log" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/log' ) );
		}
		$Log = $em->first( [ 'id' => $id ] );
		if ( $Log === false ) {
			( new Session_Helper() )
				->set_flashdata( 'error', "Unknown Log" );
			$this->helper->url->redirect( $this->getRoute( 'TijaraShop/log' ) );
		} else {
			$logModel = new Log_Model();
			$a        = $logModel->jsonToReadable( $Log->before );
			$b        = $logModel->jsonToReadable( $Log->after );

			$diff = new Diff(explode("\n", $a), explode("\n", $b), []);

			$renderer = new Diff_Renderer_Html_SideBySide();
			$tempDiff = str_replace("\\n", "<br>", $diff->Render($renderer));
			$tempDiff = str_replace("\\", "", $tempDiff);
			$tempDiff = str_replace("strongOpen", "<strong>", $tempDiff);
			$tempDiff = str_replace("strongClose", "</strong>", $tempDiff);

			$this->render( 'Log/read.html.twig', [
				'Log' => $Log,
				'diff' => $tempDiff
			] );

		}
	}

}