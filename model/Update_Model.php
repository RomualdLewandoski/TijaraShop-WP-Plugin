<?php


class Update_Model extends Model
{
    protected $supplierTable;
    protected $userTable;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->loadHelper('session');
        $this->loadHelper('url');
        $this->supplierTable = $this->helper->db->getPrefix() . '_shop_Supplier';
        $this->userTable = $this->helper->db->getPrefix() . '_shop_ShopLogin';
    }

    public function addSupplier($value)
    {
        $obj = new stdClass();
        unset($value->apiKey);
        $value->contact = base64_decode($value->contact);
        var_dump($value);

    }

    public function editSupplier($value)
    {

    }
}