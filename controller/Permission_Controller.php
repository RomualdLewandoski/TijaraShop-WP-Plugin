<?php
namespace App\Controller;

use App\Controller;

class Permission_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('install');
        $this->loadModel('perms');
        $this->loadModel("log");
        $this->loadHelper('wp');
        $this->loadHelper('form');
        $this->loadHelper('session');
        $this->loadHelper('url');

        //Chargement des styles
        $this->helper->wp->addStyle('bootstrap');
        $this->helper->wp->addStyle('TijaraShop');
        $this->helper->wp->addStyle('datatables');
        $this->helper->wp->addScript('jquery-3.4.1.min');
        $this->helper->wp->addScript('datatables');
        $this->helper->wp->addScript('bootstrap.bundle.min');
        //Ajout des styles
        $this->helper->wp->getStyle('bootstrap');
        $this->helper->wp->getStyle('TijaraShop');
        $this->helper->wp->getStyle('datatables');
        $this->helper->wp->getScript('jquery-3.4.1.min');
        $this->helper->wp->getScript('datatables');
        $this->helper->wp->getScript('bootstrap.bundle.min');

    }

    public function index()
    {
        $this->checkInstall();
        $request = $this->request();
        $action = $request->get('action');

	    $data = [];


	    if ($action == null){
            $data['perms'] = $this->model->perms->listPerms();
            $this->loadList($data);
        }else if ($action == "search"){
            $data['perms'] = $this->model->perms->getPermsLike($request);
            $data['search'] = $request->get('searchPermsName');
            $this->loadList($data);
        }else if ($action == "addPermsModel"){
          $this->addPerms($request);
        }else if ($action == "editPerms"){
            $this->editPerms($request);
        }else if ($action == "deletePerms"){
            $this->model->perms->deletePerms($request);
        }else{
            $this->helper->session->set_flashdata("error", "L'action demandée est inconnue");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
        }
    }

    function loadList($data){
        $this->loadView("adminPermsList", $data);
    }

    function addPerms($request){
        if ($this->helper->form->verify(array('permsName'))) {
            $this->model->perms->addPerms($request);
        } else {
            $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire d'ajout de modèle de permission");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
        }
    }

    function editPerms($request){
        if ($this->helper->form->verify(array('permsName'))) {
            $this->model->perms->editPerms($request);
        } else {
            $this->helper->session->set_flashdata("error", "Des champs sont manquants dans le formulaire de modification du modèle de permission");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
        }
    }



}