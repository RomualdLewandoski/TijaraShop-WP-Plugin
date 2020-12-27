<?php

use App\Migration\Migrate\Migrate;

class Migrate_19 extends Migrate {

	public function setSql() {
		$this->sql = [
			"ALTER TABLE categorie ADD CONSTRAINT categorie_fk_parent FOREIGN KEY (id) REFERENCES categorie (id) ON UPDATE CASCADE ON DELETE SET NULL",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_19";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 20 ) );
	}
}