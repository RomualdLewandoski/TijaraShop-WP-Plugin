<?php


class Install_Model extends Model
{
    protected $table;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->table = $this->helper->db->getPrefix() . '_shop_config';
    }

    public function makeInstall($request)
    {
        //todo save url site & method install & generate API KEY OR UPDATE IT
        //todo create Admin User
        //todo set step => 1
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