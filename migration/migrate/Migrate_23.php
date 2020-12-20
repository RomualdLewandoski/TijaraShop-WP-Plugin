<?php

use App\Migration\Migrate\Migrate;

class Migrate_23 extends Migrate {

	public function setSql() {
		$this->sql = [
			"CREATE TABLE IF NOT EXISTS `config` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `host` VARCHAR(255) NOT NULL, `method` VARCHAR(255) NOT NULL, `step` INT UNSIGNED DEFAULT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
"CREATE TABLE IF NOT EXISTS `delete` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `typeDelete` VARCHAR(255) NOT NULL, `targetId` INT UNSIGNED DEFAULT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
"CREATE TABLE IF NOT EXISTS `login` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `username` VARCHAR(255) NOT NULL, `password` LONGTEXT NOT NULL, `hasAdmin` TINYINT(1) NOT NULL, `hasCompta` TINYINT(1) NOT NULL, `hasProductManagement` TINYINT(1) NOT NULL, `hasSupplierManagement` TINYINT(1) NOT NULL, `hasStock` TINYINT(1) NOT NULL, `hasCaisse` TINYINT(1) NOT NULL, `isDefaultPass` TINYINT(1) NOT NULL, `version` DATETIME NOT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
"CREATE TABLE IF NOT EXISTS `permissionmodel` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `name` VARCHAR(255) NOT NULL, `hasAdmin` TINYINT(1) NOT NULL, `hasCompta` TINYINT(1) NOT NULL, `hasProductManagement` TINYINT(1) NOT NULL, `hasSupplierManagement` TINYINT(1) NOT NULL, `hasStock` TINYINT(1) NOT NULL, `hasCaisse` TINYINT(1) NOT NULL, `version` DATETIME NOT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
"CREATE TABLE IF NOT EXISTS `supplier` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `isSociety` TINYINT(1) DEFAULT NULL, `societyName` VARCHAR(255) DEFAULT NULL, `gender` VARCHAR(255) DEFAULT NULL, `firstName` VARCHAR(255) DEFAULT NULL, `lastName` VARCHAR(255) DEFAULT NULL, `address` VARCHAR(255) DEFAULT NULL, `zipCode` VARCHAR(255) DEFAULT NULL, `city` VARCHAR(255) DEFAULT NULL, `country` VARCHAR(255) DEFAULT NULL, `phone` VARCHAR(255) DEFAULT NULL, `mobilePhone` VARCHAR(255) DEFAULT NULL, `mail` VARCHAR(255) DEFAULT NULL, `refCode` VARCHAR(255) DEFAULT NULL, `webSite` VARCHAR(255) DEFAULT NULL, `paymetType` INT UNSIGNED DEFAULT NULL, `iban` VARCHAR(255) DEFAULT NULL, `bic` VARCHAR(255) DEFAULT NULL, `tva` VARCHAR(255) DEFAULT NULL, `siret` VARCHAR(255) DEFAULT NULL, `contact` LONGTEXT DEFAULT NULL, `notes` LONGTEXT DEFAULT NULL, `isActive` TINYINT(1) DEFAULT NULL, `version` DATETIME NOT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_23";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 24 ) );
	}
}