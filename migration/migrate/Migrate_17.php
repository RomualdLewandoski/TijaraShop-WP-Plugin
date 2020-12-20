<?php

use App\Migration\Migrate\Migrate;

class Migrate_17 extends Migrate {

	public function setSql() {
		$this->sql = [
			"CREATE TABLE `log` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `user` VARCHAR(255) NOT NULL, `date` DATETIME NOT NULL, `type` VARCHAR(255) NOT NULL, `action` VARCHAR(255) NOT NULL, `target` INT UNSIGNED DEFAULT NULL, `before` LONGTEXT DEFAULT NULL, `after` LONGTEXT DEFAULT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_17";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 18 ) );
	}
}