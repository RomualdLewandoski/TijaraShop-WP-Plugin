<?php

use App\Migration\Migrate\Migrate;

class Migrate_26 extends Migrate
{

    public function setSql()
    {
        $this->sql = [
            "CREATE TABLE `product` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `Designiation` VARCHAR(255) NOT NULL, `label` VARCHAR(255) NOT NULL, `codeBarre` VARCHAR(255) NOT NULL, `refArticle` VARCHAR(255) NOT NULL, `refFournisseur` VARCHAR(255) DEFAULT NULL, `Poid` DOUBLE PRECISION DEFAULT NULL, `Hauteur` DOUBLE PRECISION DEFAULT NULL, `Largeur` DOUBLE PRECISION DEFAULT NULL, `Longueur` DOUBLE PRECISION DEFAULT NULL, `prixAchat` DOUBLE PRECISION DEFAULT NULL, `prixVente` DOUBLE PRECISION NOT NULL, `tva` DOUBLE PRECISION DEFAULT NULL, `stockMin` INT UNSIGNED NOT NULL, `descriptionCourte` LONGTEXT DEFAULT NULL, `description` LONGTEXT DEFAULT NULL, `version` DATETIME NOT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",
            "CREATE TABLE `woocommerceapi` (`id` INT UNSIGNED AUTO_INCREMENT NOT NULL, `key` LONGTEXT NOT NULL, `secret` LONGTEXT NOT NULL, PRIMARY KEY(`id`)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB",

        ];
    }

    public function execute()
    {
        $this->setSql();
        $flag = true;
        foreach ($this->sql as $sql) {
            if (!$this->helper->db->custom($sql)) {
                $flag = false;
                echo "Err sql Migrate_26";
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
        $this->helper->db->insert($this->wpdb->prefix . "_shop_migration", array('version' => 27));
    }
}