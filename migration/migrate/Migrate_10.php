<?php

use App\Migration\Migrate\Migrate;

class Migrate_10 extends Migrate {

	public function setSql() {
		$this->sql = [
			"ALTER TABLE boutique CHANGE id `id` INT UNSIGNED AUTO_INCREMENT NOT NULL",
"ALTER TABLE tempo ADD `description` LONGTEXT DEFAULT NULL",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_10";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 11 ) );
	}
}