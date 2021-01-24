<?php

use App\Migration\Migrate\Migrate;

class Migrate_33 extends Migrate
{

    public function setSql()
    {
        $this->sql = [
            "ALTER TABLE product ADD `livraison` INT UNSIGNED DEFAULT NULL",
            "ALTER TABLE stock ADD `rangement` VARCHAR(255) DEFAULT NULL",
            "CREATE TABLE IF NOT EXISTS `suppliersproducts` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `product_id` INT UNSIGNED DEFAULT NULL, `supplier_id` INT UNSIGNED DEFAULT NULL,  INDEX IDX_5AF6436C4584665A (product_id), INDEX IDX_5AF6436C2ADD6D8C (supplier_id), PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
            "ALTER TABLE `suppliersproducts` ADD CONSTRAINT suppliersproducts_fk_product FOREIGN KEY (product_id) REFERENCES product (id) ON UPDATE CASCADE ON DELETE SET NULL",
            "ALTER TABLE `suppliersproducts` ADD CONSTRAINT suppliersproducts_fk_supplier FOREIGN KEY (supplier_id) REFERENCES supplier (id) ON UPDATE CASCADE ON DELETE SET NULL",

        ];
    }

    public function execute()
    {
        $this->setSql();
        $flag = true;
        foreach ($this->sql as $sql) {
            if (!$this->helper->db->custom($sql)) {
                $flag = false;
                echo "Err sql Migrate_33";
            }
        }
        if (!$flag) {
            return false;
        } else {
            $this->updateVersion();
        }
    }

    public function updateVersion()
    {
        $this->helper->db->insert($this->wpdb->prefix . "_shop_migration", array('version' => 34));
    }
}