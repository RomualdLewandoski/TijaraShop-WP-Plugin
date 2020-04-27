<?php


class Api_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('api');
        $this->loadModel('perms');
        $this->loadModel('user');
        $this->loadHelper('url');
        $this->loadHelper('form');

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
        $obj = new stdClass();
        $perms = $this->model->perms->listPerms();
        $obj->perms = $perms;
        echo json_encode($obj);
    }

    public function getUsers()
    {
        $this->checkApi();
        $obj = new stdClass();
        $users = $this->model->user->getUsers();
        $obj->users = $users;
        echo json_encode($obj);
    }

    public function changeUserPass()
    {
        $this->checkApi();
        $obj = new stdClass();
        $request = $this->request();
        if ($this->helper->form->verify(array('idWp', 'newPass'))) {
            $obj = $this->model->user->updatePassword($request);
        } else {
            $obj->state = 1;
            $obj->error = "Des champs sont manquants dans l'envoie de la modification du login";
        }
        echo json_encode($obj);
    }

    function checkApi()
    {
        if (!$this->model->api->isApiValid($_POST['apiKey'])) {
            $this->helper->url->redirect('api/main');
        }
    }
}