<?php


namespace App\Helper;


use App\Controller\Install_Controller;
use App\Helper;
use Automattic\WooCommerce\Client;
use Entity\WooCommerceApi;

class WooCommerce extends Helper
{

    function getWooConfig()
    {
        $em = $this->getManager()->getRepository(WooCommerceApi::class);
        return $em->all()[0];

    }

    /**
     * @return Client
     */
    public function getClient()
    {
        $config = (new Install_Controller())->getConfig();
        $wooConfig = $this->getWooConfig();
        $wooCommerce = new Client(
            $config->host,
            $wooConfig->key,
            $wooConfig->secret,
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true,
                'verify_ssl' => false

            ]
        );
        return $wooCommerce;
    }

}