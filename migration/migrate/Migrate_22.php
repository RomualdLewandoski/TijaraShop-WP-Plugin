<?php

use App\Migration\Migrate\Migrate;

class Migrate_22 extends Migrate {

	public function setSql() {
		$this->sql = [
			"ALTER TABLE categorie ADD `parent` INT UNSIGNED DEFAULT NULL",
"ALTER TABLE categorie ADD CONSTRAINT categorie_fk_parent FOREIGN KEY (parent) REFERENCES categorie (id) ON UPDATE CASCADE ON DELETE SET NULL",
"CREATE INDEX IDX_497DD6343D8E604F ON categorie (parent)",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_22";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 23 ) );
	}
}