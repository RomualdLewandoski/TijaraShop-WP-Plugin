<?php


class Api_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('api');
        $this->loadModel('perms');
        $this->loadModel('user');
        $this->loadModel('supplier');
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

    public function getSuppliers()
    {
        $this->checkApi();
        $obj = new stdClass();
        $suppliers = $this->model->supplier->listSupplier();
        $obj->suppliers = $suppliers;
        echo json_encode($obj);
    }

    public function changeUserPass()
    {
        $this->checkApi();
        $obj = new stdClass();
        $request = $this->request();
        if ($this->helper->form->verify(array('idWp', 'newPass'))) {
            $obj = $this->model->user->updatePassword($request->get('idWp'), $request->get('newPass'));
        } else {
            $obj->state = 1;
            $obj->error = "Des champs sont manquants dans l'envoi de la modification du login";
        }
        echo json_encode($obj);
    }

    public function addSupplier()
    {
        $this->checkApi();
        $obj = new stdClass();
        $request = $this->request();
        if ($this->helper->form->verify(array('societyName', 'firstName', 'lastName'))) {
            $obj = $this->model->supplier->addSupplier($request, true);
        } else {
            $obj->state = 0;
            $obj->error = "Des champs sont manquants dans l'envoi de l'ajout fournisseur";
        }
        echo json_encode($obj);

    }

    public function updater()
    {
        $this->checkApi();
        $obj = new stdClass();
        $request = $this->request();
        if ($this->helper->form->verify(array('type', 'action', 'value'))) {
            $type = strtolower($request->get('type'));
            $action = strtolower($request->get('action'));
            $value = json_decode(base64_decode($request->get('value')));
            switch ($type) {
                case "user":
                    switch ($action) {
                        case "editpass":
                            $id = $value->idWp;
                            $newPass = $value->newPass;
                            $obj = $this->model->user->updatePassword($id, $newPass);
                            break;

                        default:
                            $obj->state = 1;
                            $obj->error = "Unknown user action";
                    }
                    //todo createUser, deleteUser, editUser
                    break;
                case "perms":
                    //todo create, edit, delete
                    break;
                case "supplier":
                    //todo add, edit, delete
                    break;

                default:
                    $obj->state = 1;
                    $obj->error = "Unknown type";
            }
        } else {
            $obj->state = 1;
            $obj->error = "Des champs sont manquants dans l'envoie de l'UpdateThread";
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