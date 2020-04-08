<?php


class admin_Controller extends Controller
{
    public function __construct()
    {
        $this->loadHelper('wp');
        $this->helper->wp->addStyle('bootstrap');
        $this->helper->wp->addStyle('TijaraShop');
        $this->helper->wp->getStyle('bootstrap');
        $this->helper->wp->getStyle('TijaraShop');
    }

    public function index()
    {
        $this->loadView('adminMain');
    }

    public function adminApi()
    {
        $data['json'] = $this->getJsonConf();
        $this->loadView('adminApi', $data);
    }

    public function test(){
        echo "<script>alert('go')</script>";
    }

    public function getJsonConf(){
        $data = new stdClass();
        $data->method = "install";
        $data->database = "sqlite";
        $data->init = false;
        $data->host = "localhost";
        $data->api = "api";
        $data->key = "loremIpsum";

        $json_string = json_encode($data, JSON_PRETTY_PRINT);
        return $json_string;
    }
}