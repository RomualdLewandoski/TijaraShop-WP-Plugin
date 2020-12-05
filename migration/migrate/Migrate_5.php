<?php


use App\Migration\Migrate\Migrate;

class Migrate_5 extends Migrate {

	public function setSql() {
		$this->sql = [
			"CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_shop (
				id int AUTO_INCREMENT PRIMARY KEY,
				nom VARCHAR(255) NOT NULL, 
				isSending  BOOLEAN
)"
		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql5";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 6 ) );
	}
}