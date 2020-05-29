<?php

namespace TijaraShop\core\System;

class System
{
    public $model;
    public $controller;
    public $helper;

    protected static $_instance = null;

    public function __construct($pluginFolder)
    {
        session_start();
        define('wpPluginFolder', $pluginFolder);
        require_once $pluginFolder . '/helper/ParameterBag.php';
        require_once $pluginFolder . '/helper/ServerBag.php';
        require_once $pluginFolder . '/helper/HeaderBag.php';
        require_once $pluginFolder . '/helper/Request.php';
        require_once $pluginFolder . '/core/Model.php';
        require_once $pluginFolder . '/core/Controller.php';
        require_once $pluginFolder . '/core/Helper.php';

        new Model();
        new Controller();
        new Helper();


        if (!isset($this->model)) {
            $this->model = new stdClass();
        }
        if (!isset($this->controller)) {
            $this->controller = new stdClass();
        }
        if (!isset($this->helper)) {
            $this->helper = new stdClass();
        }


        $this->loadHelper('wp');
        add_action('admin_menu', array($this, 'createAdminMenu'));
        include_once wpPluginFolder . 'config/route.php';
        require_once wpPluginFolder . 'Routes/route.php';
        $router = new Route();
        $router->loadRoutes($route);

    }

    public function request()
    {
        return new Request();
    }

    public function install()
    {
        $this->loadController('install');
        $this->controller->install->install();
    }

    public function createAdminMenu()
    {
        $this->helper->wp->addMenu("TijaraShop", "manage_options", 'TijaraShop', 'Admin', 'index', '', 50.5);
        $this->helper->wp->addSubMenu("TijaraShop", "Api", "manage_options", "TijaraShop/api", 'Admin', 'adminApi');
        $this->helper->wp->addSubMenu("TijaraShop", "Utilisateurs", "manage_options", "TijaraShop/users", 'Admin', 'adminUsers');
        $this->helper->wp->addSubMenu("TijaraShop", "Permissions", "manage_options", "TijaraShop/perms", 'Admin', 'adminPerms');
        $this->helper->wp->addSubMenu("TijaraShop", "Fournisseurs", "manage_options", "TijaraShop/supplier", 'Admin', 'adminSupplier');
        $this->helper->wp->addSubMenu("TijaraShop", "Logs", "manage_options", "TijaraShop/logs", 'Admin', 'adminLogs');
        $this->helper->wp->addSubMenu("null", "Install TijaraShop", "manage_options", "TijaraShop/install", 'Install', 'displayInstall');

    }

    public function loadController($controller)
    {
        $realController = ucfirst($controller) . '_Controller';
        require_once wpPluginFolder . '/controller/' . $realController . '.php';
        if (!isset($this->controller)) {
            $this->controller = new stdClass();
        }
        $this->controller->$controller = new $realController();
        return $this->controller->$controller;
    }

    public function loadModel($model)
    {
        $realModel = ucfirst($model) . '_Model';
        require_once wpPluginFolder . 'model/' . $realModel . '.php';
        if (!isset($this->model)) {
            $this->model = new stdClass();
        }
        $this->model->$model = new $realModel();
    }

    public function loadView($view, $data = null)
    {
        $realView = $view;
        if ($data != null) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }
        echo "    <link rel=\"stylesheet\" href=\"https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css\"
          media=\"all\">
    <link rel=\"stylesheet\" href=\"https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css\"
          media=\"all\">
    <link rel=\"stylesheet\" href=\"https://kit-free.fontawesome.com/releases/latest/css/free.min.css\" media=\"all\">
        <link href=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css\"
          rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js\"></script>";
        include_once wpPluginFolder . 'views/' . $realView . '.php';

    }

    public function loadHelper($helper)
    {
        $realHelper = ucfirst($helper) . '_Helper';
        require_once wpPluginFolder . 'helper/' . $realHelper . '.php';
        if (!isset($this->helper)) {
            $this->helper = new stdClass();
        }
        $this->helper->$helper = new $realHelper();
    }

    public static function instance($pluginFolder)
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self($pluginFolder);
        }
        return self::$_instance;
    }
}