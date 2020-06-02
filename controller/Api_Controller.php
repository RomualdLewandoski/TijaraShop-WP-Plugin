<?php


class Api_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('api');
        $this->loadModel('perms');
        $this->loadModel('user');
        $this->loadModel('supplier');
        $this->loadModel('update');
        $this->loadModel('log');
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

    public function getLogs(){
        $this->checkApi();
        $obj = new stdClass();
        $obj->logs = $this->model->log->getApiLogs();
        echo json_encode($obj);
    }

    public function changeUserPass()
    {
        $this->checkApi();
        $obj = new stdClass();
        $request = $this->request();
        if ($this->helper->form->verify(array('idWp', 'newPass'))) {
            $obj = $this->model->user->updatePassword($request->get('idWp'), $request->get('newPass'), $request->get('loginUserName'));
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

    public function editSupplier()
    {
        $this->checkApi();
        $obj = new stdClass();
        $request = $this->request();
        if ($this->helper->form->verify(array('societyName', 'firstName', 'lastName'))) {
            $obj = $this->model->supplier->editSupplier($request, true);
        } else {
            $obj->state = 0;
            $obj->error = "Des champs sont manquants dans l'envoi de l'ajout fournisseur";
        }
        echo json_encode($obj);
    }

    public function deleteSupplier()
    {
        $this->checkApi();
        $obj = new stdClass();
        $request = $this->request();
        if ($this->helper->form->verify(array('idWp'))) {
            $idSupplier = $request->get('idWp');
            if ($this->model->supplier->isExist('idSupplier', $idSupplier)) {
                $obj = $this->model->supplier->deleteSupplier($idSupplier, true, $request->get('loginUserName'));
            } else {
                $obj->sate = 0;
                $obj->error = "Le fournisseur n'existe pas sur le site il a été supprimé de la caisse";
            }
        } else {
            $obj->state = 0;
            $obj->error = "Des champs sont manquants dans l'envoi de la suppression fournisseur";
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
                            $obj = $this->model->user->updatePassword($id, $newPass, $value->loginUserName);
                            break;

                        default:
                            $obj->state = 0;
                            $obj->error = "Unknown user action";
                    }
                    //todo createUser, deleteUser, editUser
                    break;
                case "perms":
                    //todo create, edit, delete
                    break;
                case "supplier":
                    //todo add, edit, delete
                    switch ($action) {
                        case "add":
                            $obj = $this->model->update->addSupplier($value);
                            break;
                        case "edit":
                            $obj = $this->model->update->editSupplier($value);
                            break;
                        case "delete":
                            if ($this->model->supplier->isExist('idSupplier', $value->idWp)) {
                                $obj = $this->model->update->deleteSupplier($value);
                            } else {
                                $obj->state = 0;
                                $obj->error = "Supplier Not found while trying delete";
                            }
                            break;
                        default:
                            $obj->state = 0;
                            $obj->error = "Unknown supplier action";
                    }
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