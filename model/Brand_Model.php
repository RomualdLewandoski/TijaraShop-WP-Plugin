<?php
namespace App\Model;


use App\Model;

class Brand_Model extends Model {

	protected $table;

	public function __construct() {
		$this->loadHelper( 'db' );
		$this->loadHelper( 'url' );
		$this->loadHelper( 'session' );
		$this->loadHelper( 'crud' );
		$this->loadModel( 'log' );
		$this->table = $this->helper->db->getPrefix() . '_shop_brand';
	}

	public function listBrands() {
		return $this->helper->db->get( $this->table, "position ASC" );
	}

	public function getBrandByName( $name ) {
		return $this->helper->db->get_where( $this->table, [ 'nom' => $name ] )[0];
	}

	public function getBrandById( $id ) {
		return $this->helper->db->get_where( $this->table, [ 'id' => $id ] )[0];
	}

	/**
	 * @param Request $request
	 */
	public function addBrand( $request ) {
		$name     = htmlspecialchars( $request->get( 'brandName' ) );
		$position = htmlspecialchars( $request->get( 'brandPosition' ) );
		if ( $position == null ) {
			$position = 1;
		}
		if ( $this->getBrandByName( $name ) != null ) {
			$this->helper->session->set_flashdata( "error", "Une marque porte déjà ce nom" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
		} else {
			$data = [
				"nom"      => $name,
				"position" => $position
			];

			$obj = $this->helper->crud->add( $this->table, $data, wp_get_current_user()->user_login . "(site)", "BrandModel" );

			if ( $obj->state ) {
				$this->helper->session->set_flashdata( "success", "La marque a bien été ajoutée" );
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
			} else {
				$this->helper->session->set_flashdata( "error", $obj->err );
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
			}
		}
	}

	/**
	 * @param Request $request
	 */
	public function editBrand( $request ) {
		$id       = $request->get( "brandId" );
		$name     = htmlspecialchars( $request->get( 'brandName' ) );
		$position = htmlspecialchars( $request->get( 'brandPosition' ) );
		if ( $position == null ) {
			$position = 1;
		}
		$data     = [
			"nom"      => $name,
			"position" => $position,
		];
		$oldBrand = $this->getBrandById( $id );
		if ( $oldBrand != null ) {
			unset( $oldBrand->id );
			$oldBrand->position = intval( $oldBrand->position );
			$obj                = $this->helper->crud->edit( $this->table, $data, wp_get_current_user()->user_login . "(site)", "BrandModel", $id, $oldBrand, [ 'id' => $id ] );

			if ( $obj->state ) {
				$this->helper->session->set_flashdata( "success", "La marque a bien été modifiée" );
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
			} else {
				$this->helper->session->set_flashdata( "error", $obj->err );
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
			}
		} else {
			$this->helper->session->set_flashdata( "error", "Impossible de trouver la marque dans la base de donnée" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
		}
	}

	/**
	 * @param Request $request
	 */
	public function deleteBrand( $request ) {
		$id       = $request->get( 'brandId' );
		$oldBrand = $this->getBrandById( $id );
		if ( $oldBrand != null ) {
			$obj = $this->helper->crud->delete( $this->table, wp_get_current_user()->user_login . "(site)", "BrandModel", $id, $oldBrand, [ 'id' => $id ] );
			if ( $obj->state ) {
				$this->helper->session->set_flashdata( "success", "La marque a bien été supprimée" );
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
			} else {
				$this->helper->session->set_flashdata( "error", $obj->err );
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
			}
		} else {
			$this->helper->session->set_flashdata( "error", "Impossible de trouver la marque dans la base de donnée" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/brand" );
		}
	}
}