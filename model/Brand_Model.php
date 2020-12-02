<?php


class Brand_Model extends Model {
	public function __construct() {
		$this->loadHelper( 'db' );
		$this->loadHelper( 'url' );
		$this->loadHelper( 'session' );
		$this->loadHelper( 'crud' );
		$this->loadModel( 'log' );
		$this->table = $this->helper->db->getPrefix() . '_shop_brand';
	}

	public function listBrands() {

	}
}