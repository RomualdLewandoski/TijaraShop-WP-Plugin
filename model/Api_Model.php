<?php
namespace App\Model;


use App\Model;
use stdClass;

class Api_Model extends Model
{
    protected $table;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->loadModel("log");
        $this->table = $this->helper->db->getPrefix() . '_shop_ApiCredentials';
    }

    /**
     * @param $apiKey
     * @Description: This method will save the apiKey tped on the config's form
     */
    public function saveApiKey($apiKey)
    {
        if ($this->getApiKey() == null) {
            $query = $this->helper->db->insert($this->table, array('privateKey' => $apiKey));
        } else {
            $userName = wp_get_current_user()->user_login . "(site)";
            if ($this->model->log->addLog($userName, "ApiModel", "ChangeKey")) {
                $query = $this->helper->db->update($this->table, array('privateKey' => $apiKey), array('idApiCredentials' => 1));
            } else {
                return false;
            }
        }
        return $query;
    }

    /**
     * @return string apiKey or NULL
     */
    public function getApiKey()
    {
        $query = $this->helper->db->get_where($this->table, array('idApiCredentials' => 1));
        $nb_result = count($query);
        if ($nb_result == 0) {
            return null;
        } else {
            return $query[0]->privateKey;
        }
    }

    /**
     * @return JsonObject with all information to quick install
     */
    public function generateJson()
    {
        $config = $this->getConfig();
        $obj = new stdClass();
        $obj->method = $config->method;
        $obj->database = "sqlite";
        $obj->host = $config->host;
        $obj->api = "api";
        $obj->privateKey = $this->getApiKey();
        return $obj;
    }

    public function getConfig()
    {
        $query = $this->helper->db->get_where($this->helper->db->getPrefix() . '_shop_Config', array('idConfig' => 1));
        return $query[0];
    }

    public function isApiValid($key)
    {
        return $key == $this->getApiKey();
    }

}