<?php


use App\Migration\Migrate\Migrate;

class Migrate_2 extends Migrate {

	public function setSql() {
		$this->sql = array(
			"CREATE TABLE IF NOT EXISTS   {$this->wpdb->prefix}_shop_delete (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            typeDelete VARCHAR(255) NOT NULL,
                            targetId INT
                            );"
		);
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ):
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
			}
		endforeach;
		if ( ! $flag ) {
			return false;
		} else {
			return $this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 3 ) );
	}
}