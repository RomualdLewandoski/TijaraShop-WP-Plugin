<?php


namespace App\Controller;


use App\Controller;
use Entity\Test;

class Test_Controller extends Controller {
	public function __construct() {

	}

	public function index() {

		$em = $this->getManager()->getRepository( 'Entity\Test' );
		foreach ( $em->all() as $data ) {
			echo $data->title . "<br>";
		}
		/**
		 * GET ONE BY AND EDIT
		 */
		$old = $em->first( [ 'id' => 2 ] );
		$old->set( 'title', 'coucou2' );
		$em->save( $old );

		$em->migrate();
	}
}