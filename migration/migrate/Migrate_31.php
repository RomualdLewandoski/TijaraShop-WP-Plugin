<?php

use App\Migration\Migrate\Migrate;

class Migrate_31 extends Migrate
{

    public function setSql()
    {
        $this->sql = [

            "ALTER TABLE stock ADD CONSTRAINT stock_fk_product FOREIGN KEY (product_id) REFERENCES product (id) ON UPDATE CASCADE ON DELETE SET NULL",
            "CREATE INDEX IDX_4B3656604584665A ON stock (product_id)",


        ];
    }

    public function execute()
    {
        $this->setSql();
        $flag = true;
        foreach ($this->sql as $sql) {
            if (!$this->helper->db->custom($sql)) {
                $flag = false;
                echo "Err sql Migrate_31";
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
        $this->helper->db->insert($this->wpdb->prefix . "_shop_migration", array('version' => 32));
    }
}