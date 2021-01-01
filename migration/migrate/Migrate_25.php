<?php

use App\Migration\Migrate\Migrate;

class Migrate_25 extends Migrate {

    public function setSql() {
        $this->sql = [
            "ALTER TABLE boutique ADD `version` DATETIME NOT NULL",
            "ALTER TABLE brand ADD `version` DATETIME NOT NULL",
            "ALTER TABLE categorie ADD `version` DATETIME NOT NULL",

        ];
    }

    public function execute() {
        $this->setSql();
        $flag = true;
        foreach ( $this->sql as $sql ) {
            if ( ! $this->helper->db->custom( $sql ) ) {
                $flag = false;
                echo "Err sql Migrate_26";
            }
        }
        if ( ! $flag ) {
            return false;
        } else {
            $this->updateVersion();
        }
    }

    public function updateVersion() {
        $this->helper->db->insert( $this->wpdb->prefix . "_shop_migration", array( 'version' => 26 ) );
    }
}