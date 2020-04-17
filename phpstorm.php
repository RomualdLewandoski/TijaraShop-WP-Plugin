<?php
die('This file is used for development purposes only.');
/**
 * PhpStorm Code Completion TijaraShop
 *
 * @package       TijaraShop
 * @subpackage    PhpStorm
 * @category      Code Completion
 * @author        Romuald Detrait
 */

/*
 * To enable code completion to your own libraries add a line above each class as follows:
 *
 * @property Library_name       $library_name                        Library description
 *
 */

/**
 * @property System $system                         This is the main class of the project
 * @property Model $model                           Model Class
 * @property Controller $controller                 This class object is the super class that every library
 * @property Helper $helper                         Helper Class
 * @property Db_Helper $db                          This is our query builder
 * @property Request $request                       This is our Request Library
 * @property WP_Helper $wp                          This is our Wordpress Helper
 * @property Form_Helper $form                      This is our Form Helper
 * @property Route_Helper $route                    This is our Route Helper
 * @property Session_Helper $session                Session Helper Class
 * @property Url_Helper $url                        This is our Url Helper
 * @property Api_Model $api                         Our Api Model
 * @property Perms_Model $perms                     Our Perms model
 * @property Randomizer_Helper $randomizer          Utils for generate Random string/int etc
 * @property User_Model $user                       Our user model
 */
class System
{
    public $helper;
    public $controller;
    public $model;

    public function __construct()
    {
    }

    /**
     * @return Request
     */
    public function request()
    {
    }

    public function install()
    {
    }

    public function createAdminMenu()
    {
    }

    public function loadController($controller)
    {
    }

    public function loadModel($model)
    {
    }

    public function loadView($view, $data = null)
    {
    }

    public function loadHelper($helper)
    {
    }

    public static function instance($pluginFolder)
    {
    }

}

class Model extends System
{
}

class Helper extends System
{
}
