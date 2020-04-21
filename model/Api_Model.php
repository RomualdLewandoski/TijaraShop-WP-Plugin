<?php


class Api_Model extends Model
{
    protected $table;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->table = $this->helper->db->getPrefix() . '_shop_apicredentials';
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
            $query = $this->helper->db->update($this->table, array('privateKey' => $apiKey), array('idApiCredentials' => 1));
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
        $obj = new stdClass();
        $obj->method = "install";
        $obj->database = "sqlite";
        $obj->init = "false";
        $obj->host = site_url()."/";
        $obj->api = "api";
        $obj->privateKey = $this->getApiKey();
        return $obj;
    }

}