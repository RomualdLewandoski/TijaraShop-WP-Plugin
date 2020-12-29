<?php


namespace App\Controller;


use App\Controller;
use App\Helper\Session_Helper;
use App\Model\Log_Model;
use App\RouteAnnotation;
use Entity\ApiCredentials;
use Form\ApiCredentialsType;
use stdClass;

class Api_Controller extends Controller
{
    public function __construct()
    {
        $this->loadModel('install');

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
     * @RouteAnnotation(parent="TijaraShop", title="Api", slug="api", order=1)
     */
    public function index()
    {
        $this->checkInstall();
        $em = $this->getManager()->getRepository(ApiCredentials::class);
        $api = $em->first(['id' => 1]);

        $form = $this->createForm(ApiCredentialsType::class, $api);

        $form->handleRequest($this->request());

        if ($form->isSubmitted() && $form->isValid()) {
            $oldApi = $em->first(['id' => 1]);
            if ($em->save($api)) {
                if ((new Log_Model())
                    ->log(null,
                        "Api",
                        "Edit",
                        $api->id,
                        $oldApi,
                        $api
                    )) {
                    (new Session_Helper())
                        ->set_flashdata("success", "L'api a bien été modifiée");
                } else {
                    $em->save($oldApi);
                    (new Session_Helper())
                        ->set_flashdata("error", "Erreur lors de la création du log, l'action a été annulée");
                }
            } else {
                (new Session_Helper())
                    ->set_flashdata("error", "Erreur lors de l'action, elle a été annulée");
            }
        }
        $config = (new Install_Controller())->getConfig();
        $obj = new stdClass();
        $obj->method = $config->method;
        $obj->database = "sqlite";
        $obj->host = $config->host;
        $obj->api = "api";
        $obj->privateKey = $api->privateKey;

        $this->render('Api/index.html.twig', [
            'form' => $form,
            'json' => json_encode($obj, JSON_PRETTY_PRINT),
        ]);

    }

    public static function isApi()
    {

    }

}