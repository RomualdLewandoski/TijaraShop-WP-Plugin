<?php
namespace App\Model;

use App\Model;

class Cat_Model extends Model {
	protected $table;

	public function __construct() {
		$this->loadHelper( 'db' );
		$this->loadHelper( 'url' );
		$this->loadHelper( 'session' );
		$this->loadHelper( 'crud' );
		$this->loadModel( 'log' );
		$this->table = $this->helper->db->getPrefix() . '_shop_categorie';
	}

	public function listCats() {
		$datas = $this->helper->db->get_where( $this->table, [ 'parent' => - 1 ], "position ASC" );
		$arr   = [];
		foreach ( $datas as $cat ) {
			$data       = $this->helper->db->get_where( $this->table, [ 'parent' => $cat->id ], "position ASC" );
			$cat->child = $data;
			array_push( $arr, $cat );
		}

		return $arr;
	}

	/**
	 * @param int $id
	 */
	public function listSubCat( $id ) {
		$id = htmlspecialchars( $id );
		if ( is_numeric( $id ) ) {
			$datas = $this->helper->db->get_where( $this->table, [ 'parent' => $id ], "position ASC" );
			$arr   = [];
			foreach ( $datas as $cat ) {
				$data       = $this->helper->db->get_where( $this->table, [ 'parent' => $cat->id ], "position ASC" );
				$cat->child = $data;
				array_push( $arr, $cat );
			}

			return $arr;
		} else {
			return [];
		}
	}

	public function getCatListed() {
		return $this->getCats( [], 0, - 1 );

	}

	function getCats( $arr, $padding, $parent ) {
		$datas = $this->helper->db->get_where( $this->table, [ 'parent' => $parent ], "position ASC" );

		foreach ( $datas as $cat ) {
			if ( $padding != 0 ) {
				for ( $i = 0; $i < $padding; $i ++ ) {
					$cat->nom = "--" . $cat->nom;
				}
			}
			array_push( $arr, $cat );
			$data = $this->helper->db->get_where( $this->table, [ 'parent' => $cat->id ], "position ASC" );
			if ( count( $data ) != 0 ) {
				$arr = $this->getCats( $arr, $padding + 1, $cat->id );
			}
		}

		return $arr;
	}

	/**
	 * @param int $id
	 */
	public function getCatById( $id ) {
		$id  = htmlspecialchars( $id );
		$cat = $this->helper->db->get_where( $this->table, [ 'id' => $id ] )[0];

		return $cat;
	}

	/**
	 * @param Request $request
	 */
	public function addCat( $request ) {
		$name     = htmlspecialchars( $request->get( 'catName' ) );
		$position = htmlspecialchars( $request->get( 'catPosition' ) );
		if ( $position == null ) {
			$position = 1;
		}
		$parent = htmlspecialchars( $request->get( 'parentCat' ) );
		if ( $parent == "" ) {
			$parent = - 1;
		}
		$data = [
			"nom"      => $name,
			"position" => $position,
			"parent"   => $parent
		];

		$obj = $this->helper->crud->add( $this->table, $data, wp_get_current_user()->user_login . "(site)", "CatModel" );

		if ( $obj->state ) {
			$this->helper->session->set_flashdata( "success", "La catégorie a bien été ajoutée" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
		} else {
			$this->helper->session->set_flashdata( "error", $obj->err );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
		}
	}

	/**
	 * @param Request $request
	 */
	public function editCat( $request ) {
		$id       = $request->get( 'catId' );
		$name     = htmlspecialchars( $request->get( 'catName' ) );
		$position = htmlspecialchars( $request->get( 'catPosition' ) );
		if ( $position == null ) {
			$position = 1;
		}
		$parent = htmlspecialchars( $request->get( 'parentCat' ) );
		if ( $parent == "" ) {
			$parent = - 1;
		}
		$data   = [
			"nom"      => $name,
			"position" => $position,
			"parent"   => $parent
		];
		$oldCat = $this->getCatById( $id );
		if ( $oldCat != null ) {
			unset( $oldCat->id );
			$oldCat->position = intval( $oldCat->position );
			$oldCat->parent   = intval( $oldCat->parent );
			$where            = [ 'id' => $id ];
			$obj              = $this->helper->crud->edit( $this->table, $data, wp_get_current_user()->user_login . "(site)", "CatModel", $id, $oldCat, $where );

			if ( $obj->state ) {
				$this->helper->session->set_flashdata( "success", "La catégorie a bien été modifiée" );
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
			} else {
				$this->helper->session->set_flashdata( "error", $obj->err );
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
			}
		} else {
			$this->helper->session->set_flashdata( "error", "Impossible de trouver la catégorie dans la base de donnée" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
		}
	}

	public function delete( $request ) {
		$id = $request->get('catId');
		$oldCat = $this->getCatById( $id );
		if ($oldCat != null){

			$data       = $this->helper->db->get_where( $this->table, [ 'parent' => $oldCat->id ], "position ASC" );
			if (count($data) != 0){
				$this->helper->session->set_flashdata( "error", "Impossible de supprimer une catégorie parent, merci de retirer les enfants dans un premier temps");
				$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
			}else{
				$obj = $this->helper->crud->delete($this->table, wp_get_current_user()->user_login."(site)", "CatModel", $id, $oldCat, ['id' => $id]);
				if ( $obj->state ) {
					$this->helper->session->set_flashdata( "success", "La catégorie a bien été supprimée" );
					$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
				} else {
					$this->helper->session->set_flashdata( "error", $obj->err );
					$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
				}
			}
		}else{
			$this->helper->session->set_flashdata( "error", "Impossible de trouver la catégorie dans la base de donnée" );
			$this->helper->url->redirect( "wp-admin/admin.php?page=TijaraShop/cat" );
		}
	}
}