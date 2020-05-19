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
        //todo we ll insert here and return $obj based on result
        if (!$this->helper->db->insert($this->supplierTable, $value)) {
            $obj->state = 0;
            $obj->error = "Erreur lors de l'ajout du fournisseur dans la base de donnée (site)";
        } else {
            $obj->state = 1;
        }
        return $obj;

    }

    public function editSupplier($value)
    {

    }
}