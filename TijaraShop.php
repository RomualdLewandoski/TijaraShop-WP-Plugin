<?php

/*
Plugin Name: TijaraShop Caisse Plugin
Description: Plugin suplémentaire au bon fonctionnement de la caisse
Version: 0.0.1-Alpha
Author: Romuald Detrait
License: Closed-Sources
 */

class TijaraShop
{
    protected $request;
    protected $wpdb;

    public function __construct()
    {
        include_once plugin_dir_path(__FILE__) . '/utils/CustomRoutes.php';
        include_once plugin_dir_path(__FILE__) . "/utils/ParameterBag.php";
        include_once plugin_dir_path(__FILE__) . "/utils/ServerBag.php";
        include_once plugin_dir_path(__FILE__) . "/utils/HeaderBag.php";
        include_once plugin_dir_path(__FILE__) . "/utils/Request.php";
        global $wpdb;
        $this->wpdb = $wpdb;

        register_activation_hook(__FILE__, array($this, 'install')); //activate hook
        register_deactivation_hook(__FILE__, array($this, 'uninstall')); //deactivate hook


        $this->request = new Request($_GET, $_POST, $_SERVER);
        $tijaraRoutes = new CustomRoutes();
        $tijaraRoutes->addRoute(
            '^api/?',
            array($this, 'api_callback')
        );

        $tijaraRoutes->forceFlush();

    }

    public function api_callback()
    {
        $obj = new stdClass();
        if ($this->request->isMethod('post')) {
            $obj->api = "ready";
            $action = $this->request->get("action");
            switch ($action) {
                case 'loginGet':
                    include_once plugin_dir_path(__FILE__) . "/api/login.php";
                    $login = new Login($this->request, $this->wpdb);
                    $obj = $login->getLogin();
                    break;
                case 'supplierGet':
                    include_once plugin_dir_path(__FILE__)."/api/supplier.php";
                    $supplier = new Supplier($this->request, $this->wpdb);
                    $obj = $supplier->getSupplliers();
                    break;
                default:
                    $obj->api = "ready";
                    $obj->error = "1";
                    $obj->desc = "Unknown api action";
                    break;
            }

        } else {
            $obj->api = "ready";
            $obj->error = "1";
            $obj->desc = "No post method";
        }
        echo json_encode($obj);
    }

    public function install()
    {

        $this->wpdb->query("CREATE TABLE IF NOT EXISTS {$this->wpdb->prefix}shop_login (
                                        id INT AUTO_INCREMENT PRIMARY KEY,
                                        userName VARCHAR(255) NOT NULL,
                                        password TEXT NOT NULL ,
                                        rank INT
                                         );");
        $this->wpdb->query("
        CREATE TABLE IF NOT EXISTS  {$this->wpdb->prefix}shop_fournisseur(
        id INT AUTO_INCREMENT PRIMARY KEY,
        prenom VARCHAR(255) NOT NULL ,
        nom VARCHAR(255) NOT NULL,
        tel VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        numAddresse INT,
        rueAddresse VARCHAR(255),
        villeAddresse VARCHAR(255),
        zipAddresse VARCHAR(255),
        paysAddresse VARCHAR(255)
        );
        ");
    }

}


new TijaraShop();
