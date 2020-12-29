<?php


namespace App\Controller;


use App\Controller;
use App\Helper\Randomizer_Helper;
use App\Helper\Session_Helper;
use App\RouteAnnotation;
use Entity\ApiCredentials;
use Entity\Config;
use Entity\Login;
use Form\InstallType;

class Install_Controller extends Controller
{
    public function __construct()
    {
        $this->loadHelper('db');
        $this->loadHelper('wp');
        $this->loadHelper('form');
        $this->loadHelper('session');
        $this->loadHelper('url');

        $this->loadModel("install");

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
    }

    /**
     * @RouteAnnotation(parent="null", title="Install_Controller", slug="install")
     */
    public function index()
    {

        $form = $this->createForm(InstallType::class, null);

        $form->handleRequest($this->request());

        if ($form->isSubmitted() && $form->isValid()) {
            $request = $this->request();
            $apiManager = $this->getManager()->getRepository(ApiCredentials::class);
            $userManager = $this->getManager()->getRepository(Login::class);
            $configManager = $this->getManager()->getRepository(Config::class);

            $url = $request->request->get('url');
            $install = $request->request->get('install');
            $apiKey = $request->request->get('apiKey');
            $userName = $request->request->get('userName');
            $password = $request->request->get('password');
            $passwordConf = $request->request->get('passwordConf');

            if ($url == null || $install == null || $userName == null || $password == null || $passwordConf == null) {
                (new Session_Helper())->set_flashdata('error', 'Des champs sont manquants dans le formulaire d\'installation');
            } else {
                if ($password != $passwordConf) {
                    (new Session_Helper())->set_flashdata('error', 'Le mot de passe et sa confirmation ne correspondent pas');
                } else {
                    if ($apiKey == null) {
                        $apiKey = mb_strtoupper((new Randomizer_Helper())->randomizeString(15));
                    }
                    $api = new ApiCredentials();
                    $api->set('privateKey', $apiKey);
                    $api->set('id', 1);
                    $apiManager->save($api);

                    $adminUser = new Login();
                    $adminUser->set('username', $userName);
                    $adminUser->set('password', password_hash($password, PASSWORD_DEFAULT));
                    $adminUser->set('hasAdmin', true);
                    $adminUser->set('hasCompta', true);
                    $adminUser->set('hasProductManagement', true);
                    $adminUser->set('hasSupplierManagement', true);
                    $adminUser->set('hasStock', true);
                    $adminUser->set('hasCaisse', true);
                    $adminUser->set('isDefaultPass', false);
                    $adminUser->set('version', new \DateTime('now'));
                    $userManager->save($adminUser);

                    $config = new Config();
                    $config->set('host', $url);
                    if ($install == "nope") {
                        $install = "install";
                    }
                    $config->set('method', $install);
                    $config->set('step', 1);
                    $configManager->save($config);

                    (new Session_Helper())->set_flashdata('success', "L'installation est terminée");
                    $this->helper->url->redirect($this->getRoute('TijaraShop'));

                }
            }

        }

        $this->render('Install/index.html.twig', [
            'form' => $form
        ]);
    }


    public function getConfig()
    {
        $em = $this->getManager()->getRepository(Config::class);
        return $em->first(['id' => 1]);
    }

}