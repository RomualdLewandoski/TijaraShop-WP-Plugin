<?php

use App\Migration\Migrate\Migrate;

class Migrate_29 extends Migrate
{

    public function setSql()
    {
        $this->sql = [
            "ALTER TABLE product ADD `brand_id` INT UNSIGNED DEFAULT NULL",
            "ALTER TABLE product ADD CONSTRAINT product_fk_brand FOREIGN KEY (brand_id) REFERENCES brand (id) ON UPDATE CASCADE ON DELETE CASCADE",
            "CREATE INDEX IDX_D34A04AD44F5D008 ON product (brand_id)",

        ];
    }

    public function execute()
    {
        $this->setSql();
        $flag = true;
        foreach ($this->sql as $sql) {
            if (!$this->helper->db->custom($sql)) {
                $flag = false;
                echo "Err sql Migrate_29";
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
        $this->helper->db->insert($this->wpdb->prefix . "_shop_migration", array('version' => 30));
    }
}