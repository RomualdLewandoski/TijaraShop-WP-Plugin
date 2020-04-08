<?php

/*
Plugin Name: TijaraShop Caisse Plugin
Description: Plugin suplémentaire au bon fonctionnement de la caisse
Version: 0.0.1-Alpha
Author: Romuald Detrait
License: Closed-Sources
 */

include_once plugin_dir_path(__FILE__) . '/core/System.php';
$GLOBALS['tijarashop'] = start();

function start()
{
    return System::instance(plugin_dir_path(__FILE__));
}

register_activation_hook(__FILE__, 'install');

function install()
{
    $GLOBALS['tijarashop']->install();
}