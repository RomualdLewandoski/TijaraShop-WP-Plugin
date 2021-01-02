<?php


namespace App\Controller;


use App\Controller;
use App\Helper\WooCommerce;
use App\RouteAnnotation;

class Temp_Controller extends Controller
{
    public function __construct()
    {

    }

    /**
     * @RouteAnnotation(parent="TijaraShop", title="Temp_Controller", slug="Temp_Controller")
     */
    public function index()
    {

        $wooCommerce = (new WooCommerce())->getClient();

        r($wooCommerce->get('products/14'));

    }

}