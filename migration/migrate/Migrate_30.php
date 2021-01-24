<?php

use App\Migration\Migrate\Migrate;

class Migrate_30 extends Migrate
{

    public function setSql()
    {
        $this->sql = [
            "CREATE TABLE `stock` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `product_id` INT UNSIGNED DEFAULT NULL, `boutique_id` INT UNSIGNED DEFAULT NULL, `quantity` INT UNSIGNED NOT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
        ];
    }

    public function execute()
    {
        $this->setSql();
        $flag = true;
        foreach ($this->sql as $sql) {
            if (!$this->helper->db->custom($sql)) {
                $flag = false;
                echo "Err sql Migrate_30";
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
        $this->helper->db->insert($this->wpdb->prefix . "_shop_migration", array('version' => 31));
    }
}