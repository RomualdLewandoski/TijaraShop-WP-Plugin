<?php

namespace App\Controller;

use App\Controller;
use App\Helper\Randomizer_Helper;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use Entity\Login;
use Entity\Log;
use Entity\PermissionModel;
use Form\LoginType;
use App\RouteAnnotation;


class Login_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('install');
        $this->loadModel('cat');

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

    /**
     * @RouteAnnotation(parent="TijaraShop", title="Utilisateurs", slug="login", order=3)
     */
    public function index()
    {
        $this->checkInstall();

        $em = $this->getManager()->getRepository(Login::class);

        $this->render('Login/index.html.twig', [
            'Logins' => $em->all(),
        ]);
    }

    function cryptPass($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @RouteAnnotation(parent="null", title="addLogin", slug="login/new")
     */
    public function new()
    {
        $Login = new Login();
        $em = $this->getManager()->getRepository(Login::class);
        $form = $this->createForm(LoginType::class, $Login);
        $request = $this->request();
        $form->handleRequest($this->request());

        if ($form->isSubmitted() && $form->isValid()) {
            $Login->set('version', new \DateTime('now'));
            if ($request->request->get('password') == null) {
                $Login->set('isDefaultPass', true);
                $password = (new Randomizer_Helper())->randomizeString(8);
            } else {
                $password = $this->cryptPass($request->request->get('password'));
                $Login->set('isDefaultPass', false);
            }
            $Login->set('password', $password);

            if ($request->request->get('permission') != "0") {
                $pManager = $this->getManager()->getRepository(PermissionModel::class);
                $perms = $pManager->first(['id' => $request->request->get('permission')]);
                if ($perms === false) {
                    (new Session_Helper())->set_flashdata('error', 'Permission not found');
                    $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
                } else {
                    $Login->set('hasAdmin', $perms->hasAdmin);
                    $Login->set('hasCompta', $perms->hasCompta);
                    $Login->set('hasProductManagement', $perms->hasProductManagement);
                    $Login->set('hasSupplierManagement', $perms->hasSupplierManagement);
                    $Login->set('hasStock', $perms->hasStock);
                    $Login->set('hasCaisse', $perms->hasCaisse);
                }
            }
            if ($em->save($Login)) {
                if ((new Log_Model())
                    ->log(null,
                        "Login",
                        "Create",
                        $Login->id,
                        null,
                        $Login
                    )) {
                    (new Session_Helper())
                        ->set_flashdata("success", "Login a bien été ajoutée");
                    $this->helper->url->redirect($this->getRoute('TijaraShop/login'));

                } else {
                    $em->delete($Login);
                    (new Session_Helper())
                        ->set_flashdata("error", "Erreur lors de la création du log, l'action a été annulée");
                }
            } else {
                (new Session_Helper())
                    ->set_flashdata("error", "Erreur lors de l'action, elle a été annulée");
            }
        }
        $this->render('Login/new.html.twig', [
            'form' => $form
        ]);

    }

    /**
     * @RouteAnnotation(parent="null", title="editLogin", slug="login/edit")
     */
    public function edit()
    {
        $this->checkInstall();
        $em = $this->getManager()->getRepository(Login::class);
        $request = $this->request();
        $id = $request->query->get('id');
        if ($id == null) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown id for this Login");
            $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
        }
        $Login = $em->first(['id' => $id]);
        if ($Login === false) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown Login");
            $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
        } else {
            $form = $this->createForm(LoginType::class, $Login);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $Login->set('version', new \DateTime('now'));
                if ($request->request->get('permission') != "0") {
                    $pManager = $this->getManager()->getRepository(PermissionModel::class);
                    $perms = $pManager->first(['id' => $request->request->get('permission')]);
                    if ($perms === false) {
                        (new Session_Helper())->set_flashdata('error', 'Permission not found');
                        $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
                    } else {
                        $Login->set('hasAdmin', $perms->hasAdmin);
                        $Login->set('hasCompta', $perms->hasCompta);
                        $Login->set('hasProductManagement', $perms->hasProductManagement);
                        $Login->set('hasSupplierManagement', $perms->hasSupplierManagement);
                        $Login->set('hasStock', $perms->hasStock);
                        $Login->set('hasCaisse', $perms->hasCaisse);
                    }
                }
                $oldLogin = $em->first(['id' => $id]);
                if ($em->save($Login)) {
                    if ((new Log_Model())
                        ->log(null,
                            "Login",
                            "Edit",
                            $Login->id,
                            $oldLogin,
                            $Login
                        )) {
                        (new Session_Helper())
                            ->set_flashdata("success", "Login a bien été modifiée");
                        $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
                    } else {
                        $em->save($oldLogin);
                        (new Session_Helper())
                            ->set_flashdata("error", "Erreur lors de la création du log, l'action a été annulée");
                    }
                } else {
                    (new Session_Helper())
                        ->set_flashdata("error", "Erreur lors de l'action, elle a été annulée");
                }
            }

            $this->render('Login/edit.html.twig', [
                'form' => $form,
                'Login'=> $Login
            ]);

        }
    }

    /**
     * @RouteAnnotation(parent="null", title="resetLoginPassword", slug="login/reset")
     */
    public function passWordReset()
    {
        $this->checkInstall();
        $request = $this->request();
        $em = $this->getManager()->getRepository(Login::class);
        $id = $request->query->get('id');
        if ($id == null) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown id for this Login");
            $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
        }
        $Login = $em->first(['id' => $id]);
        if ($Login === false) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown Login");
            $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
        } else {
            $Login->set('isDefaultPass', true);
            $password = (new Randomizer_Helper())->randomizeString(8);
            $Login->set('password', $password);
            $em->save($Login);
            (new Session_Helper())
                ->set_flashdata('success', "Le mot de passe a bien été réinitialisé");
            $this->helper->url->redirect($this->getRoute('TijaraShop/login') . "&id=" . $id);
        }
    }

    /**
     * @RouteAnnotation(parent="null", title="deleteLogin", slug="login/delete")
     */
    public function delete()
    {
        $this->checkInstall();
        $em = $this->getManager()->getRepository(Login::class);
        $request = $this->request();
        $id = $request->query->get('id');
        if ($id == null) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown id for this Login");
            $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
        }
        $Login = $em->first(['id' => $id]);
        if ($Login === false) {
            (new Session_Helper())
                ->set_flashdata('error', "Unknown Login");
            $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
        } else {
            $oldLogin = $em->first(['id' => $id]);
            if ($em->delete($Login)) {
                if ((new Log_Model())
                    ->log(null,
                        "Login",
                        "Delete",
                        $oldLogin->id,
                        $oldLogin,
                        null
                    )) {
                    (new Session_Helper())
                        ->set_flashdata("success", "Login a bien été supprimé");
                } else {
                    $em->save($oldLogin);
                    (new Session_Helper())
                        ->set_flashdata("error", "Erreur lors de la création du log, l'action a été annulée");
                }
            } else {
                (new Session_Helper())
                    ->set_flashdata("error", "Erreur lors de l'action, elle a été annulée");
            }
            $this->helper->url->redirect($this->getRoute('TijaraShop/login'));
        }
    }

}