<?php
namespace App\Helper;

use App\Helper;

class Wp_Helper extends Helper
{

    public function addStyle($name)
    {
        wp_register_style($name, plugins_url('TijaraShop/assets/css/' . $name . '.css', wpPluginFolder));
    }

    public function getStyle($name)
    {
        wp_enqueue_style($name);
    }

    public function addScript($name)
    {
        wp_register_script($name, plugins_url('TijaraShop/assets/js/' . $name . '.js', wpPluginFolder));
    }

    public function getScript($name)
    {
        wp_enqueue_script($name);
    }

    /**
     * @param $title
     * @param $perms
     * @param $slug
     * @param $controller
     * @param $method
     * @param $icon
     * @param null $position
     */
    public function addMenu($title, $perms, $slug, $controller, $method, $icon = '', $position = null)
    {
        $this->loadController($controller);
        add_menu_page($title, $title, $perms, $slug, array($this->controller->$controller, $method), $icon, $position);
    }

    /**
     * @param $slugParent
     * @param $titleSelf
     * @param $perms
     * @param $slug
     * @param $controller
     * @param $method
     */
    public function addSubMenu($slugParent, $titleSelf, $perms, $slug, $controller, $method)
    {
        $this->loadController($controller);
        add_submenu_page($slugParent, $titleSelf, $titleSelf, $perms, $slug, array($this->controller->$controller, $method));
    }


    public function execute()
    {
        //$this->controller->$controllerName->$methodName();
        echo "coucou";
    }
}
