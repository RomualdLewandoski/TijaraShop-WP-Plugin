<?php

use App\Migration\Migrate\Migrate;

class Migrate_16 extends Migrate {

	public function setSql() {
		$this->sql = [
			"ALTER TABLE boutique ADD `isDefault` TINYINT(1) NOT NULL, CHANGE nom `nom` VARCHAR(255) NOT NULL",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_16";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 17 ) );
	}
}