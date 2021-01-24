<?php

use App\Migration\Migrate\Migrate;

class Migrate_32 extends Migrate
{

    public function setSql()
    {
        $this->sql = [

            "ALTER TABLE stock ADD CONSTRAINT stock_fk_boutique FOREIGN KEY (boutique_id) REFERENCES boutique (id) ON UPDATE CASCADE ON DELETE SET NULL",
            "CREATE INDEX IDX_4B365660AB677BE6 ON stock (boutique_id)",

        ];
    }

    public function execute()
    {
        $this->setSql();
        $flag = true;
        foreach ($this->sql as $sql) {
            if (!$this->helper->db->custom($sql)) {
                $flag = false;
                echo "Err sql Migrate_32";
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
        $this->helper->db->insert($this->wpdb->prefix . "_shop_migration", array('version' => 33));
    }
}