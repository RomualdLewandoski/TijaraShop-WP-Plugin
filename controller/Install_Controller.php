<?php


class Install_Controller extends Controller
{
    public function __construct()
    {
        $this->loadHelper('db');
        $this->loadHelper('wp');
        $this->loadHelper('form');
        $this->loadHelper('session');
        $this->loadHelper('url');

        $this->helper->wp->addStyle('bootstrap');
        $this->helper->wp->addStyle('TijaraShop');
        $this->helper->wp->addStyle('datatables');
        $this->helper->wp->addScript('jquery-3.4.1.min');
        $this->helper->wp->addScript('datatables');
        $this->helper->wp->addScript('bootstrap.bundle.min');
        $this->helper->wp->getStyle('bootstrap');
        $this->helper->wp->getStyle('TijaraShop');
        $this->helper->wp->getStyle('datatables');
        $this->helper->wp->getScript('jquery-3.4.1.min');
        $this->helper->wp->getScript('datatables');
        $this->helper->wp->getScript('bootstrap.bundle.min');
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
                                hasCompta TINYINT(1),
                                hasProductManagement TINYINT(1),
                                hasSupplierManagement TINYINT(1),
                                hasStock TINYINT(1),
                                hasCaisse TINYINT(1)
);";
        $shopLoginTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_ShopLogin (
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
);";

        $shopLoginLogTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_ShopLoginLog (
                                idShopLoginLog INT AUTO_INCREMENT PRIMARY KEY ,
                                idShopLogin INT NOT NULL,
                                dateShopLoginLog VARCHAR(255),
                                statusShopLoginLog INT
);";

        $shopConfigTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_config(
                                idConfig INT AUTO_INCREMENT PRIMARY KEY,
                                host VARCHAR(255) NOT NULL,
                                method VARCHAR(255) NOT NULL,
                                step INT
)";

        $this->helper->db->custom($apiCredentialsTable);
        $this->helper->db->custom($permissionModelTable);
        $this->helper->db->custom($shopLoginTable);
        $this->helper->db->custom($shopLoginLogTable);
        $this->helper->db->custom($shopConfigTable);
    }

    public function displayInstall(){
        $data['pageUrl'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['error'] = $this->helper->session->flashdata("error");
        $data['success'] = $this->helper->session->flashdata("success");
        $request = $this->request();
        $action = $request->get('action');
        if ($action == null) {
            $this->loadView("adminInstall", $data);
        } else if ($action == "install") {
            var_dump($_POST);
        }
    }
}