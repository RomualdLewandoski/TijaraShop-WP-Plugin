<?php

use App\Migration\Migrate\Migrate;

class Migrate_34 extends Migrate {

	public function setSql() {
		$this->sql = [
"CREATE TABLE IF NOT EXISTS `catproducts` (`product_id` INT UNSIGNED DEFAULT NULL, `category_id` INT UNSIGNED DEFAULT NULL, `id` INT UNSIGNED AUTO_INCREMENT NOT NULL, INDEX IDX_E74339714584665A (product_id), INDEX IDX_E743397112469DE2 (category_id), PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
"ALTER TABLE `catproducts` ADD CONSTRAINT catproducts_fk_product FOREIGN KEY (product_id) REFERENCES product (id) ON UPDATE CASCADE ON DELETE SET NULL",
"ALTER TABLE `catproducts` ADD CONSTRAINT catproducts_fk_category FOREIGN KEY (category_id) REFERENCES categorie (id) ON UPDATE CASCADE ON DELETE SET NULL",

		];
	}

	public function execute() {
		$this->setSql();
		$flag = true;
		foreach ( $this->sql as $sql ) {
			if ( ! $this->helper->db->custom( $sql ) ) {
				$flag = false;
				echo "Err sql Migrate_34";
			}
		}
		if ( ! $flag ) {
			return false;
		} else {
			$this->updateVersion();
		}
	}

	public function updateVersion() {
		$this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 35 ) );
	}
}