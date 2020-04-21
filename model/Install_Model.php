<?php


class Install_Model extends Model
{
    protected $table;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->loadHelper('session');
        $this->loadHelper('url');
        $this->loadHelper('randomizer');
        $this->loadModel('api');
        $this->loadModel('user');
        $this->table = $this->helper->db->getPrefix() . '_shop_Config';
    }

    public function makeInstall($request)
    {
        $siteUrl = htmlspecialchars($request->get('siteUrl'));
        $methodInstall = htmlspecialchars($request->get('methodInstall'));
        $apiKey = htmlspecialchars($request->get('apiKey'));
        $adminName = htmlspecialchars($request->get('adminName'));
        $adminPass = htmlspecialchars($request->get('adminPassword'));
        $adminPassConf = htmlspecialchars($request->get('adminPasswordConf'));
        if ($adminPass != $adminPassConf) {
            $this->helper->session->set_flashdata("error", "Le mot de passe administrateur et sa confirmation ne correspondent pas");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/install");
        } else {
            $configData = array(
                'host' => $siteUrl,
                'method' => $methodInstall,
                'step' => 1
            );
            if ($apiKey == null) {
                $apiKey = mb_strtoupper($this->helper->randomizer->randomizeString(8));
            }
            $this->model->api->saveApiKey($apiKey);
            $this->model->user->createAdminUser($adminName, $adminPass);
            if (!$this->helper->db->insert($this->table, $configData)) {
                //todo error
                $this->helper->session->set_flashdata('error', "Une erreur interne est survenue lors de l'installation du plugin");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/install");
            } else {
                //todo success
                $this->helper->session->set_flashdata("success", "L'installation est terminée avec succès vous pouvez dès a présent configurer la caisse ou utiliser le plugin WordPress");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop");

            }

        }
    }

    public function isInstall()
    {
        $query = $this->helper->db->get_where($this->table, array('idConfig' => 1));
        if (count($query) == 0) {
            return false;
        } else {
            $data = $query[0];
            return $data->step == 1;
        }
    }


}