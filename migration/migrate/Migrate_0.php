<?php


use App\Migration\Migrate\Migrate;

class Migrate_0 extends Migrate
{
    public function setSql()
    {
        $this->sql = array("CREATE TABLE IF NOT EXISTS   {$this->wpdb->prefix}_shop_migration (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            version INT
                            );",
            "CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_ApiCredentials(
                            idApiCredentials INT AUTO_INCREMENT PRIMARY KEY,
                            privateKey VARCHAR(255) NOT NULL                               
                            );",
            "CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_PermissionModel(
                                idPermissionModel INT AUTO_INCREMENT PRIMARY KEY,
                                namePermissionModel VARCHAR(255) NOT NULL,
                                hasAdmin TINYINT(1),
                                hasCompta TINYINT(1),
                                hasProductManagement TINYINT(1),
                                hasSupplierManagement TINYINT(1),
                                hasStock TINYINT(1),
                                hasCaisse TINYINT(1)
                            );",
            "CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_ShopLogin (
                            idShopLogin INT AUTO_INCREMENT PRIMARY KEY,
                            usernameShopLogin VARCHAR(255) NOT NULL,
                            passwordShopLogin TEXT NOT NULL,
                            hasAdmin TINYINT(1),
                            hasCompta TINYINT(1),
                            hasProductManagement TINYINT(1),
                            hasSupplierManagement TINYINT(1),
                            hasStock TINYINT(1),
                            hasCaisse TINYINT(1),
                            isDefaultPass TINYINT(1)
            );",
            "CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_Config(
                                idConfig INT AUTO_INCREMENT PRIMARY KEY,
                                host VARCHAR(255) NOT NULL,
                                method VARCHAR(255) NOT NULL,
                                step INT
            );",
            "CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_Supplier(
                                idSupplier INT AUTO_INCREMENT PRIMARY KEY,
                                isSociety TINYINT(1),
                                societyName VARCHAR(255),
                                gender VARCHAR(20),
                                firstName VARCHAR(255),
                                lastName VARCHAR(255),
                                address VARCHAR(255),
                                zipCode VARCHAR (50),
                                city VARCHAR(255),
                                country varchar (140),
                                phone VARCHAR(100),
                                mobilePhone VARCHAR(100),
                                mail VARCHAR(255),
                                refCode VARCHAR(100),
                                webSite VARCHAR(255),
                                paymentType INT,
                                iban VARCHAR(255),
                                bic VARCHAR(255),
                                tva VARCHAR (255),
                                siret VARCHAR(255),
                                contact TEXT,
                                notes TEXT,
                                isActive TINYINT(1)
            );",
            "CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}_shop_Log(
                            idLog INT AUTO_INCREMENT PRIMARY KEY,
                            userLog VARCHAR(255) NOT NULL,
                            dateLog DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                            typeLog VARCHAR(255) NOT NULL,
                            actionLog VARCHAR(255) NOT NULL,
                            targetIdLog INT,
                            beforeLog TEXT,
                            afterLog TEXT
            );"
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
        $this->helper->db->insert($this->wpdb->prefix . "_shop_migration", array('version' => 1));
    }



}