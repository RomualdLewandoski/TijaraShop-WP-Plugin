<?php

use App\Migration\Migrate\Migrate;

class Migrate_18 extends Migrate {

	public function setSql() {
		$this->sql = [
			"CREATE TABLE `apicredentials` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `privateKey` VARCHAR(255) NOT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
"CREATE TABLE `brand` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `nom` VARCHAR(255) NOT NULL, `position` INT UNSIGNED DEFAULT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
"CREATE TABLE `categorie` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `nom` VARCHAR(255) NOT NULL, `position` INT UNSIGNED DEFAULT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_18";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 19 ) );
	}
}