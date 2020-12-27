<?php

use App\Migration\Migrate\Migrate;

class Migrate_7 extends Migrate {

	public function setSql() {
		$this->sql = [
			"ALTER TABLE boutique CHANGE id `id` INT UNSIGNED AUTO_INCREMENT NOT NULL",
"CREATE TABLE `tempo` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `name` VARCHAR(255) DEFAULT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_7";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 8 ) );
	}
}