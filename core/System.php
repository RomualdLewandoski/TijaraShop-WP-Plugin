<?php


class System
{
    public $request;
    public $model;
    public $controller;
    public $helper;

    protected static $_instance = null;

    public function __construct($pluginFolder)
    {
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

        $this->request = new Request($_GET, $_POST, $_SERVER);
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
        $this->loadHelper('route');
        $this->helper->route->addRoutes('^api/?', 'Admin', 'test');
    }

    public function install(){
        $this->loadController('install');
        $this->controller->install->install();
    }

    public function createAdminMenu()
    {
        $this->helper->wp->addMenu("TijaraShop", "manage_options", 'TijaraShop', 'Admin', 'index', '', 50.5);
        $this->helper->wp->addSubMenu("TijaraShop", "Api", "manage_options", "TijaraShop/Api", 'Admin', 'adminApi');
    }

    public function loadController($controller)
    {
        $realController = $controller . '_Controller';
        require_once wpPluginFolder . '/controller/' . $realController . '.php';
        if (!isset($this->controller)) {
            $this->controller = new stdClass();
        }
        $this->controller->$controller = new $realController();
        return $this->controller->$controller;
    }

    public function loadModel($model)
    {
        $realModel = $model . '_Model';
        require_once wpPluginFolder . 'model/' . $realModel . '.php';
        if (!isset($this->model)) {
            $this->model = new stdClass();
        }
        $this->model->$model = new $realModel();
    }

    public function loadView($view, $data = null)
    {
        $realView = $view . '_View';
        if ($data != null) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }
        include_once wpPluginFolder . 'views/' . $realView . '.php';

    }

    public function loadHelper($helper)
    {
        $realHelper = $helper . '_Helper';
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