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
        $array = json_decode(json_encode($value), true);
        if (!$this->helper->db->insert($this->supplierTable, $array)) {
            $obj->state = 0;
            $obj->error = "Erreur lors de l'ajout du fournisseur dans la base de donnée (site)";
        } else {
            $idWp = $this->helper->db->get_where($this->supplierTable, array('societyName' => $value->societyName))[0]->idSupplier;
            $obj->state = 1;
            $obj->action = "AddSupplier";
            $obj->idWp = $idWp;
            $obj->societyName = $value->societyName;
        }
        return $obj;

    }

    public function editSupplier($value)
    {
        $obj = new stdClass();
        $idSupplier = $value->idWp;
        unset($value->idWp);
        unset($value->apiKey);
        $value->contact = base64_decode($value->contact);
        $array = json_decode(json_encode($value), true);

        if (!$this->helper->db->update($this->supplierTable, $array, array('idSupplier' => $idSupplier))) {
            $obj->state = 0;
            $obj->error = "Erreur lors de l'edition du fournisseur dans la base de donnée";
        } else {
            $obj->state = 1;
        }
        return $obj;
    }

    public function deleteSupplier($value)
    {
        $obj = new stdClass();
        $idSupplier = $value->idWp;
        if (!$this->helper->db->delete($this->supplierTable, array('idSupplier' => $idSupplier))) {
            $obj->state = 0;
            $obj->error = "Erreur lors de la suppression du fournisseur (site)";
        } else {
            $obj->state = 1;
        }
        return $obj;
    }
}