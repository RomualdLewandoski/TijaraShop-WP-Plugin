<?php
namespace App;
/*
Plugin Name: TijaraShop Caisse Plugin
Description: Plugin suplémentaire au bon fonctionnement de la caisse
Version: 1.4
Author: Romuald Detrait
License: Closed-Sources
 */


use stdClass;

define("version", 1.4);
define("apiVersion", "1.4");
define("dbVersion", 1);
require_once __DIR__ . '/vendor/autoload.php';

include_once plugin_dir_path(__FILE__) . '/core/System.php';
$GLOBALS['tijarashop'] = start();

function start()
{

    return System::instance(plugin_dir_path(__FILE__));
}

register_activation_hook(__FILE__, 'install');
add_filter('plugins_api', 'App\tijarashop_plugin_info', 20, 3);
add_filter('site_transient_update_plugins', 'App\tijarashop_push_update');
add_action('upgrader_process_complete', 'App\tijarashop_after_update', 10, 2);

// Display the link with the plugin meta.
add_filter('plugin_row_meta', 'App\plugin_links', 10, 4);

function tijarashop_after_update($upgrader_object, $options)
{
    if ($options['action'] == 'update' && $options['type'] === 'plugin') {
        // just clean the cache when new plugin version is installed
        delete_transient('tijarashop_upgrade_TijaraShop');
    }
}

function install()
{
    $GLOBALS['tijarashop']->install();
}

function tijarashop_plugin_info($res, $action, $args)
{

    // do nothing if this is not about getting plugin information
    if ('plugin_information' !== $action) {
        return false;
    }

    $plugin_slug = 'TijaraShop'; // we are going to use it in many places in this function

    // do nothing if it is not our plugin
    if ($plugin_slug !== $args->slug) {
        return false;
    }

    // trying to get from cache first
    if (false == $remote = get_transient('tijarashop_update_' . $plugin_slug)) {

        // info.json is the file with the actual plugin information on your server
        $remote = wp_remote_get('https://raw.githubusercontent.com/RomualdLewandoski/TijaraShop-WP-Plugin/master/info.json', array(
                'timeout' => 20,
                'headers' => array(
                    'Accept' => 'application/json'
                ))
        );

        if (!is_wp_error($remote) && isset($remote['response']['code']) && $remote['response']['code'] == 200 && !empty($remote['body'])) {
            set_transient('tijarashop_update_' . $plugin_slug, $remote, 60); // 12 hours cache
        }

    }

    if (!is_wp_error($remote) && isset($remote['response']['code']) && $remote['response']['code'] == 200 && !empty($remote['body'])) {

        $remote = json_decode($remote['body']);
        $res = new stdClass();

        $res->name = $remote->name;
        $res->slug = $plugin_slug;
        $res->version = $remote->version;
        $res->tested = $remote->tested;
        $res->requires = $remote->requires;
        $res->author = '<a href="https://https://github.com/RomualdLewandoski">Romuald Detrait</a>';
        $res->download_link = $remote->download_url;
        $res->trunk = $remote->download_url;
        $res->requires_php = '5.3';
        $res->last_updated = $remote->last_updated;
        $res->sections = array(
            'description' => $remote->sections->description,
            'installation' => $remote->sections->instalation,
            'changelog' => $remote->sections->changelog
            // you can add your custom sections (tabs) here
        );

        // in case you want the screenshots tab, use the following HTML format for its content:
        // <ol><li><a href="IMG_URL" target="_blank"><img src="IMG_URL" alt="CAPTION" /></a><p>CAPTION</p></li></ol>
        if (!empty($remote->sections->screenshots)) {
            $res->sections['screenshots'] = $remote->sections->screenshots;
        }

        $res->banners = array(
            'low' => 'https://YOUR_WEBSITE/banner-772x250.jpg',
            'high' => 'https://YOUR_WEBSITE/banner-1544x500.jpg'
        );
        return $res;

    }

    return false;

}

function plugin_links($links, $plugin_file, $plugin_data)
{

    if ($plugin_file == "TijaraShop/TijaraShop.php") {
        $slug = 'TijaraShop';
        $links[] = sprintf('<a href="%s" class="thickbox" title="%s">%s</a>',
            self_admin_url('plugin-install.php?tab=plugin-information&amp;plugin=' . $slug . '&amp;TB_iframe=true&amp;width=600&amp;height=550'),
            esc_attr(sprintf(__('More information about %s'), $plugin_data['Name'])),
            __('View details')
        );
    }

    return (array)$links;

}

function tijarashop_push_update($transient)
{

    if (empty($transient->checked)) {
        return $transient;
    }

    // trying to get from cache first, to disable cache comment 10,20,21,22,24
    if (false == $remote = get_transient('tijarashop_upgrade_TijaraShop')) {

        // info.json is the file with the actual plugin information on your server
        $remote = wp_remote_get('https://raw.githubusercontent.com/RomualdLewandoski/TijaraShop-WP-Plugin/master/info.json', array(
                'timeout' => 20,
                'headers' => array(
                    'Accept' => 'application/json'
                ))
        );

        if (!is_wp_error($remote) && isset($remote['response']['code']) && $remote['response']['code'] == 200 && !empty($remote['body'])) {
            set_transient('tijarashop_upgrade_TijaraShop', $remote, 60); // 12 hours cache
        }

    }

    if (!is_wp_error($remote) && $remote) {

        $remote = json_decode($remote['body']);
        // your installed plugin version should be on the line below! You can obtain it dynamically of course
        if ($remote && version_compare(version, $remote->version, '<') && version_compare($remote->requires, get_bloginfo('version'), '<')) {
            $res = new stdClass();
            $res->slug = 'TijaraShop';
            $res->plugin = 'TijaraShop/TijaraShop.php'; // it could be just YOUR_PLUGIN_SLUG.php if your plugin doesn't have its own directory
            $res->new_version = $remote->version;
            $res->tested = $remote->tested;
            $res->package = $remote->download_url;
            $transient->response[$res->plugin] = $res;
            //$transient->checked[$res->plugin] = $remote->version;
        }

    }
    return $transient;
}