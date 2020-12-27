<?php


use App\Migration\Migrate\Migrate;

class Migrate_4 extends Migrate {

	public function setSql() {
		$this->sql = [
			"CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_brand (
			id int AUTO_INCREMENT PRIMARY KEY,
			nom VARCHAR(255) NOT NULL, 
			position INT
		)"
		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql4";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 5 ) );
	}
}
