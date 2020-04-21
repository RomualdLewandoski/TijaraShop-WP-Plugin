<?php


class Api_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('api');
        $this->loadHelper('url');

    }

    public function index()
    {
        $obj = new stdClass();
        $obj->state = "READY";
        $obj->version = apiVersion;
        echo json_encode($obj);
    }

    public function getPerms()
    {
        $this->checkApi();
        echo "plop";
    }

    function checkApi()
    {
        if (!$this->model->api->isApiValid($_POST['apiKey'])) {
            $this->helper->url->redirect('api/main');
        }
    }
}