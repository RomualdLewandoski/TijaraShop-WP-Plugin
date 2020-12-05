<?php


use App\Migration\Migrate\Migrate;

class Migrate_3 extends Migrate {

	public function setSql() {
		$this->sql = ["CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_categorie (
							id INT AUTO_INCREMENT PRIMARY KEY,
							nom VARCHAR(255) NOT NULL,
							position INT,
							parent INT
							);
		"];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ($this->sql as $sql){
			if (! $this->helper->db->custom($sql)){
				$flag = false;
				echo "Err sql";
			}
		}
		if (!$flag){
			return false;
		}else{
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 4 ) );
	}
}