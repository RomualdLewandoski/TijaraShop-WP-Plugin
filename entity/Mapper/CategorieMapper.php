<?php

namespace Entity\Mapper;

use Spot\Mapper;

class CategorieMapper extends Mapper {

	/**
	 * Get all non parent cat
	 *
	 * @return \Spot\Query
	 */
	public function getNonParent() {
		return $this->where( [ 'parent' => 0 ] )
		            ->order( [ 'id' => 'ASC' ] );
	}

	public function getCatListed( ) {
		return $this->getCats( [], 0, 0 );

	}

	function getCats( $arr, $padding, $parent ) {
		//$datas = $this->helper->db->get_where( $this->table, [ 'parent' => $parent ], "position ASC" );
		$datas = $this->where( [ 'parent' => $parent ] );

		foreach ( $datas as $cat ) {
			if ( $padding != 0 ) {
				for ( $i = 0; $i < $padding; $i ++ ) {
					$cat->nom = "--" . $cat->nom;
				}
			}
			array_push( $arr, $cat );
			//$data = $this->helper->db->get_where( $this->table, [ 'parent' => $cat->id ], "position ASC" );

			if ( count( $cat->getChild ) != 0 ) {
				$arr = $this->getCats( $arr, $padding + 1, $cat->id );
			}
		}

		return $arr;
	}


}