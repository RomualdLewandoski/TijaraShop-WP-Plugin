<?php


class install_Controller extends Controller
{
    public function __construct()
    {
        $this->loadHelper('db');
    }

    public function install()
    {
        global $wpdb;
        $apiCredentialsTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_ApiCredentials(
                                idApiCredentials INT AUTO_INCREMENT PRIMARY KEY,
                                privateKey VARCHAR(255) NOT NULL                               
);";

        $permissionModelTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_PermissionModel(
                                idPermissionModel INT AUTO_INCREMENT PRIMARY KEY,
                                namePermissionModel VARCHAR(255) NOT NULL,
                                hasAdmin TINYINT(1),
                                hasCOmpta TINYINT(1),
                                hasProductManagement TINYINT(1),
                                hasSuppierManagement TINYINT(1),
                                hasStock TINYINT(1),
                                hasCaisse TINYINT(1)
);";
        $shopLoginTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_ShopLogin (
                            idShopLogin INT AUTO_INCREMENT PRIMARY KEY,
                            usernameShopLogin VARCHAR(255) NOT NULL,
                            passwordShopLogin TEXT NOT NULL,
                            hasAdmin TINYINT(1),
                            hasCOmpta TINYINT(1),
                            hasProductManagement TINYINT(1),
                            hasSuppierManagement TINYINT(1),
                            hasStock TINYINT(1),
                            hasCaisse TINYINT(1)
);";

        $shopLoginLogTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_ShopLoginLog (
                                idShopLoginLog INT AUTO_INCREMENT PRIMARY KEY ,
                                idShopLogin INT NOT NULL,
                                dateShopLoginLog VARCHAR(255),
                                statusShopLoginLog INT
);";

        $this->helper->db->custom($apiCredentialsTable);
        $this->helper->db->custom($permissionModelTable);
        $this->helper->db->custom($shopLoginTable);
        $this->helper->db->custom($shopLoginLogTable);
    }
}