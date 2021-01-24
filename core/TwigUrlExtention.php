<?php


namespace App;


use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TwigUrlExtention extends AbstractExtension {

	public function getFunctions() {
		return [
			new TwigFunction( 'makeUrl', [ $this, 'makeUrl' ] ),
			new TwigFunction( 'wp', [ $this, 'wp' ] ),
			new TwigFunction( 'wpResult', [ $this, 'wpResult' ] ),
			new TwigFunction( 'wpResult2', [ $this, 'wpResult2' ] ),
			new TwigFunction( 'wpResult3', [ $this, 'getOption' ] ),
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

	public function wp(){
        return wp_get_attachment_url(get_option('media_selector_attachment_id'));
    }

    public function wpResult(){
        return get_option('media_selector_attachment_id');
    }

    public function wpResult2(){
       return _e('Upload image');
    }

    public function getOption(){
        return get_option( 'media_selector_attachment_id', 0 );
    }
}