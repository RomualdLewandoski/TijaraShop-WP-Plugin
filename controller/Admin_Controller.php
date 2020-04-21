<?php


class Admin_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('install');

        $this->loadModel('api');
        $this->loadModel('perms');
        $this->loadModel("user");
        $this->loadHelper('wp');
        $this->loadHelper('form');
        $this->loadHelper('session');
        $this->loadHelper('url');
        $this->helper->wp->addStyle('bootstrap');
        $this->helper->wp->addStyle('TijaraShop');
        $this->helper->wp->addStyle('datatables');
        $this->helper->wp->addScript('jquery-3.4.1.min');
        $this->helper->wp->addScript('datatables');
        $this->helper->wp->addScript('bootstrap.bundle.min');
        $this->helper->wp->getStyle('bootstrap');
        $this->helper->wp->getStyle('TijaraShop');
        $this->helper->wp->getStyle('datatables');
        $this->helper->wp->getScript('jquery-3.4.1.min');
        $this->helper->wp->getScript('datatables');
        $this->helper->wp->getScript('bootstrap.bundle.min');
        if (!$this->model->install->isInstall()){
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/install");
        }
    }

    public function index()
    {
        $data['apiKey'] = $this->model->api->getApiKey();
        $this->loadView('adminMain', $data);
    }

    public function adminApi()
    {

        $request = $this->request();
        $action = $request->get('action');
        if ($action == null) {
            $data['json'] = $this->getJsonConf();
            $data['apiKey'] = $this->model->api->getApiKey();
            $data['error'] = $this->helper->session->flashdata("error");
            $data['success'] = $this->helper->session->flashdata("success");
            $data['pageUrl'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            $this->loadView('adminApi', $data);
        } elseif ($action == "saveApi") {
            $inputs = array('apiKey');
            if ($this->helper->form->verify($inputs)) {
                $api = htmlspecialchars(trim($request->get('apiKey')));
                if ($this->model->api->saveApiKey($api)) {
                    $this->helper->session->set_flashdata("success", "La clé api a bien été modifiée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/api");
                } else {
                    $this->helper->session->set_flashdata("error", "Une erreur interne est survenue pendant la modification de la clé api");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/api");
                }
            } else {
                $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire de modification de la clé api");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/api");
            }
        } else {
            $this->helper->session->set_flashdata("error", "L'action demandée est inconnue");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/api");
        }

    }

    public function adminUsers()
    {
        $data['pageUrl'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['error'] = $this->helper->session->flashdata("error");
        $data['success'] = $this->helper->session->flashdata("success");
        $request = $this->request();
        $action = $request->get('action');
        if ($action == null) {
            $data['userList'] = $this->model->user->getUsers();
            $data['search'] = null;
            $this->loadView('adminUser', $data);
        } else if ($action == "search") {
            $data['userList'] = $this->model->user->getUserLike($request);
            $data['search'] = $request->get('searchUserName');
            $this->loadView('adminUser', $data);
        } else if ($action == "addUser") {
            $data['permsList'] = $this->model->perms->listPerms();
            $this->loadView('adminCreateUser', $data);
        } else if ($action == "submitAddUser") {
            if ($this->helper->form->verify(array('addUserName'))) {
                $this->model->user->addUser($request);
            } else {
                $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire de modification de l'utilisateur");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users&action=addUser");
            }
        } else if ($action == "editUser") {
            if ($this->helper->form->verify(array('userName'))) {
                $this->model->user->editUser($request);
            } else {
                $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire de modification de l'utilisateur");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            }
        } else if ($action == "deleteUser") {
            $this->model->user->deleteUser($request);
        } else if ($action == "editPassword") {
            $this->model->user->resetPassword($request);
        } else {
            $this->helper->session->set_flashdata("error", "L'action demandée est inconnue");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
        }
    }

    public function adminPerms()
    {
        $data['pageUrl'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['error'] = $this->helper->session->flashdata("error");
        $data['success'] = $this->helper->session->flashdata("success");
        $request = $this->request();
        $action = $request->get('action');
        if ($action == null) {
            $data['perms'] = $this->model->perms->listPerms();
            $this->loadView("adminPermsList", $data);
        } else if ($action == "search") {
            $data['perms'] = $this->model->perms->getPermsLike($request);
            $data['search'] = $request->get('searchPermsName');
            $this->loadView('adminPermsList', $data);
        } else if ($action == "addPermsModel") {
            if ($this->helper->form->verify(array('permsName'))) {
                $this->model->perms->addPerms($request);
            } else {
                $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire d'ajout de modèle de permission");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
            }
        } else if ($action == "editPerms") {
            if ($this->helper->form->verify(array('permsName'))) {
                $this->model->perms->editPerms($request);
            } else {
                $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire de modification du modèle de permission");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
            }
        } else if ($action == "deletePerms") {
            $this->model->perms->deletePerms($request);
        } else {
            $this->helper->session->set_flashdata("error", "L'action demandée est inconnue");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
        }
    }

    public function adminLogs()
    {
        //todo we ll not use a request here we just have a form to get our logs who are send to a DataTable
    }


    public function getJsonConf()
    {
        $json_string = json_encode($this->model->api->generateJson(), JSON_PRETTY_PRINT);
        return $json_string;
    }
}