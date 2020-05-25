<?php


class Admin_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('install');
        $this->loadModel('api');
        $this->loadModel('perms');
        $this->loadModel("user");
        $this->loadModel('supplier');
        $this->loadModel("log");
        $this->loadHelper('wp');
        $this->loadHelper('form');
        $this->loadHelper('session');
        $this->loadHelper('url');

        $this->helper->wp->addStyle('bootstrap');
        $this->helper->wp->addStyle('TijaraShop');
        $this->helper->wp->addStyle('datatables');
        $this->helper->wp->addStyle('chosen');
        $this->helper->wp->addScript('jquery-3.4.1.min');
        $this->helper->wp->addScript('datatables');
        $this->helper->wp->addScript('bootstrap.bundle.min');
        $this->helper->wp->addScript('chosen.jquery');
        $this->helper->wp->getStyle('bootstrap');
        $this->helper->wp->getStyle('TijaraShop');
        $this->helper->wp->getStyle('datatables');
        $this->helper->wp->getStyle('chosen');
        $this->helper->wp->getScript('jquery-3.4.1.min');
        $this->helper->wp->getScript('datatables');
        $this->helper->wp->getScript('bootstrap.bundle.min');
        $this->helper->wp->getScript('chosen.jquery');


    }

    public function index()
    {
        $this->checkInstall();
        $data['error'] = $this->helper->session->flashdata("error");
        $data['success'] = $this->helper->session->flashdata("success");
        $data['apiKey'] = $this->model->api->getApiKey();
        $this->loadView('adminMain', $data);
    }

    public function adminApi()
    {
        $this->checkInstall();
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
        $this->checkInstall();
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
        $this->checkInstall();
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

    public function adminSupplier()
    {
        $this->checkInstall();
        $data['pageUrl'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['error'] = $this->helper->session->flashdata("error");
        $data['success'] = $this->helper->session->flashdata("success");
        $request = $this->request();
        $action = $request->get('action');
        if ($action == null) {
            $data['listSupplier'] = $this->model->supplier->listSupplier();
            $this->loadView('adminSupplier', $data);
        } else if ($action == "addSupplier") {
            $this->loadView('adminAddSupplier', $data);
        } else if ($action == "add") {
            if ($this->helper->form->verify(array('societyName', 'firstName', 'lastName'))) {
                $this->model->supplier->addSupplier($request, false);
            } else {
                $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire d'ajout de fournisseur");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
            }
        } else if ($action == "view") {
            if ($request->get('idSupplier') != null) {
                $idSupplier = $request->get('idSupplier');
                if ($this->model->supplier->isExist('idSupplier', $idSupplier)) {
                    $data['supplier'] = $this->model->supplier->getBy('idSupplier', $idSupplier)[0];
                    $this->loadView('adminViewSupplier', $data);
                } else {
                    $this->helper->session->set_flashdata("error", "L'identifiant du fournisseur est inconnu dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            } else {
                $this->helper->session->set_flashdata("error", "Impossible de récupérer l'identifiant du fournisseur");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
            }
        } else if ($action == "delete") {
            if ($request->get('idSupplier') != null) {
                $idSupplier = $request->get('idSupplier');
                if ($this->model->supplier->isExist('idSupplier', $idSupplier)) {
                    $this->model->supplier->deleteSupplier($idSupplier);
                } else {
                    $this->helper->session->set_flashdata("error", "L'identifiant du fournisseur est inconnu dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            } else {
                $this->helper->session->set_flashdata("error", "Impossible de récupérer l'identifiant du fournisseur");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
            }
        } else if ($action == "editSupplier") {
            if ($request->get('idSupplier') != null) {
                $idSupplier = $request->get('idSupplier');
                if ($this->model->supplier->isExist('idSupplier', $idSupplier)) {
                    $data['supplier'] = $this->model->supplier->getBy('idSupplier', $idSupplier)[0];
                    $this->loadView('adminEditSupplier', $data);
                } else {
                    $this->helper->session->set_flashdata("error", "L'identifiant du fournisseur est inconnu dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            } else {
                $this->helper->session->set_flashdata("error", "Impossible de récupérer l'identifiant du fournisseur");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
            }
        } else if ($action == "edit") {
            if ($this->helper->form->verify(array('societyName', 'firstName', 'lastName', 'idSupplier'))) {
                $this->model->supplier->editSupplier($request);
            } else {
                $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire de modification du fournisseur");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
            }
        }
    }

    public
    function adminLogs()
    {
        $this->checkInstall();
        $data['pageUrl'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $data['error'] = $this->helper->session->flashdata("error");
        $data['success'] = $this->helper->session->flashdata("success");
        $request = $this->request();
        $action = $request->get('action');
        if ($action == null) {
            $data['logList'] = $this->model->log->getList();



            $this->loadView("adminLogs", $data);
        } else if ($action == "view") {
            $idLog = $request->get('idLog');

            $log = $this->model->log->getLog($idLog);
            require_once dirname(__FILE__) . '/../helper/Diff.php';

            // Options for generating the diff
            $options = array(
                //'ignoreWhitespace' => true,
                //'ignoreCase' => true,
            );


            $a = json_encode(json_decode($log->beforeLog), JSON_PRETTY_PRINT);
            $b = json_encode(json_decode($log->afterLog), JSON_PRETTY_PRINT);

            // Initialize the diff class
            $diff = new Diff(explode("\n", $a), explode("\n", $b), $options);

            require_once dirname(__FILE__) . "/../helper/Diff/Renderer/Html/SideBySide.php";

            $renderer = new Diff_Renderer_Html_SideBySide;
            $data['diff'] = $diff->Render($renderer);

            $this->loadView("adminViewLog", $data);

        }
    }


    public
    function getJsonConf()
    {
        $json_string = json_encode($this->model->api->generateJson(), JSON_PRETTY_PRINT);
        return $json_string;
    }

    function checkInstall()
    {
        if (!$this->model->install->isInstall()) {
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/install");
        }
    }


}