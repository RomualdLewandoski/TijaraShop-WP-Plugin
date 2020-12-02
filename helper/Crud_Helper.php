<?php


class Crud_Helper extends Helper {

	public function __construct() {
		$this->loadModel( 'log' );
		$this->loadHelper( 'db' );
	}

	/**
	 * @param string $table
	 * @param array $data
	 * @param string $user
	 * @param string $type
	 *
	 * @return stdClass
	 */
	public function add( $table, $data, $user, $type ) {
		$obj = new stdClass();
		if ( $this->model->log->addLog( $user, $type, "Create", "", "", json_encode( $data ) ) ) {
			$tempIdLog = $this->helper->db->getLastId();
			if ( ! $this->helper->db->insert( $table, $data ) ) {
				$this->model->log->deleteLog( $tempIdLog );
				$obj->state = false;
				$obj->err   = "Une erreur interne est survenue lors de l'ajout dans la base de donnée";
			} else {
				$tempIdAdd = $this->helper->db->getLastId();
				$this->model->log->addId( $tempIdLog, $tempIdAdd );
				$obj->state = true;
			}
		} else {
			$obj->state = false;
			$obj->err   = "Une erreur interne est survenue lors de l'ajout du log. Aucune donnée n'as été ajoutée dans la base.";
		}

		return $obj;
	}

	/**
	 * @param string $table
	 * @param array $data
	 * @param string $user
	 * @param string $type
	 * @param int $id
	 * @param mixed $before
	 * @param array $where
	 *
	 * @return stdClass
	 */
	public function edit( $table, $data, $user, $type, $id, $before, $where ) {
		$obj = new stdClass();
		if ( $this->model->log->addLOg( $user, $type, "Edit", $id, json_encode( $before ), json_encode( $data ) ) ) {
			$tempIdLog = $this->helper->db->getLastId();
			if ( ! $this->helper->db->update( $table, $data, $where ) ) {
				$this->model->log->deleteLog( $tempIdLog );
				$obj->state = false;
				$obj->err   = "Une erreur interne est survenue lors de la modification dans la base de donnée";
			} else {
				$obj->state = true;
			}
		} else {
			$obj->state = false;
			$obj->err   = "Une erreur interne est survenue lors de l'ajout du log. Aucune donnée n'as été modifiée dans la base.";
		}

		return $obj;
	}

	/**
	 * @param string $table
	 * @param string $user
	 * @param string $type
	 * @param integer $id
	 * @param mixed $before
	 * @param array $where
	 *
	 * @return stdClass
	 */
	public function delete( $table, $user, $type, $id, $before, $where ) {
		$obj = new stdClass();
		if ( $this->model->log->addLog( $user, $type, "Delete", $id, json_encode( $before ) ) ) {
			$tempIdLog = $this->helper->db->getLastId();
			if ( ! $this->helper->db->delete( $table, $where ) ) {
				$this->model->log->deleteLog( $tempIdLog );
				$obj->state = false;
				$obj->err   = "Une erreur interne est survenue lors de la suppression dans la base de donnée";
			} else {
				$obj->state = true;
			}
		} else {
			$obj->state = false;
			$obj->err   = "Une erreur interne est survenue lors de l'ajout du log. Aucune donnée n'as été modifiée dans la base.";
		}

		return $obj;
	}
}