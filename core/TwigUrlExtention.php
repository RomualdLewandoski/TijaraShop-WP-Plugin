<?php


namespace App;


use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TwigUrlExtention extends AbstractExtension {

	public function getFunctions() {
		return [
			new TwigFunction( 'makeUrl', [ $this, 'makeUrl' ] )
		];
	}

	public function makeUrl( $slug ) {
		global $_parent_pages;

		if ( isset( $_parent_pages[ $slug ] ) ) {
			$url = admin_url( 'admin.php?page=' . $slug );
		} else {
			$url = '';
		}

		$url = esc_url( $url );


		return $url;
	}

}