<?php


use App\Migration\Migrate\Migrate;

class Migrate_1 extends Migrate
{
    public function setSql()
    {
        $this->sql = array("ALTER TABLE {$this->wpdb->prefix}_shop_supplier ADD version TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW() AFTER isActive",
            "ALTER TABLE {$this->wpdb->prefix}_shop_permissionmodel ADD version TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW() AFTER hasCaisse",
            "ALTER TABLE {$this->wpdb->prefix}_shop_shoplogin ADD version TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW() AFTER isDefaultPass"
        );
    }

    public function execute()
    {
        $this->setSql();
        $flag = true;
        foreach ($this->sql as $sql):
            if (!$this->helper->db->custom($sql)) {
                $flag = false;
            }
        endforeach;
        if (!$flag) {
            return false;
        } else {
            return $this->updateVersion();
        }
    }

    public function updateVersion()
    {
        $this->helper->db->insert($this->wpdb->prefix . "_shop_migration", array('version' => 2));
    }
}