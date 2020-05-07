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

        $this->loadModel("install");

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

        $shopConfigTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_Config(
                                idConfig INT AUTO_INCREMENT PRIMARY KEY,
                                host VARCHAR(255) NOT NULL,
                                method VARCHAR(255) NOT NULL,
                                step INT
)";
        $shopSupplierTable = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}_shop_Supplier(
                                idSupplier INT AUTO_INCREMENT PRIMARY KEY,
                                isSociety TINYINT(1),
                                societyName VARCHAR(255),
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
                                BIC VARCHAR(255),
                                tva VARCHAR (255),
                                siret VARCHAR(255),
                                contact TEXT,
                                notes TEXT,
                                isActive TINYINT(1)
);";

        $this->helper->db->custom($apiCredentialsTable);
        $this->helper->db->custom($permissionModelTable);
        $this->helper->db->custom($shopLoginTable);
        $this->helper->db->custom($shopLoginLogTable);
        $this->helper->db->custom($shopConfigTable);
        $this->helper->db->custom($shopSupplierTable);
    }

    public function displayInstall()
    {
        $data['pageUrl'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['error'] = $this->helper->session->flashdata("error");
        $data['success'] = $this->helper->session->flashdata("success");
        $request = $this->request();
        $action = $request->get('action');
        if ($action == null) {
            $this->loadView("adminInstall", $data);
        } else if ($action == "install") {
            if ($this->helper->form->verify(array('siteUrl', 'methodInstall', 'adminName', 'adminPassword', 'adminPasswordConf'))) {
                $this->model->install->makeInstall($request);
            } else {
                $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire d'installation");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/install");
            }
        }
    }
}