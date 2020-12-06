<?php


namespace App\Controller;

use App\Controller;


class Boutique_Controller extends Controller {
	public function __construct() {

	}

	public function index() {
		$data['$boutiques'] = $this->getManager()->getRepository( 'Entity\Boutique' )->all();
		$this->loadView( 'boutique/boutiqueList', $data );
	}
}