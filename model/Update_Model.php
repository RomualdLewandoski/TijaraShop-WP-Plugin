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
        $this->loadModel("log");
        $this->supplierTable = $this->helper->db->getPrefix() . '_shop_Supplier';
        $this->userTable = $this->helper->db->getPrefix() . '_shop_ShopLogin';
    }

    public function addSupplier($value)
    {
        $obj = new stdClass();
        unset($value->apiKey);
        $userName = $value->loginnUserName . " (UpdateThread)";
        unset($value->loginUserName);
        $value->contact = base64_decode($value->contact);
        $value->contact = json_encode(json_decode($value->contact), JSON_PRETTY_PRINT);

        $array = json_decode(json_encode($value), true);
        if ($this->model->log->addLog($userName, "SupplierModel", "Create", "", "", json_encode($value))) {
            $tempIdLog = $this->helper->db->getLastId();


            if (!$this->helper->db->insert($this->supplierTable, $array)) {
                $obj->state = 0;
                $obj->error = "Erreur lors de l'ajout du fournisseur dans la base de donnée (site)";
            } else {
                $tempIdAdd = $this->helper->db->getLastId();
                $this->model->log->addId($tempIdLog, $tempIdAdd);

                $idWp = $this->helper->db->get_where($this->supplierTable, array('societyName' => $value->societyName))[0]->idSupplier;
                $obj->state = 1;
                $obj->action = "AddSupplier";
                $obj->idWp = $idWp;
                $obj->societyName = $value->societyName;
            }
        } else {
            $obj->state = 0;
            $obj->error = "Erreur lors de la création du log. Le fournisseur n'as pas été ajouté";
        }
        return $obj;
    }

    public function editSupplier($value)
    {
        $obj = new stdClass();
        $idSupplier = $value->idWp;
        $userName = $value->loginUserName . "(UpdateThread)";
        unset($value->loginUserName);
        unset($value->idWp);
        unset($value->apiKey);
        $value->contact = base64_decode($value->contact);
        $array = json_decode(json_encode($value), true);

        $old = $this->helper->db->get_where($this->supplierTable, array('idSupplier' => $idSupplier))[0];
        unset($old->idSupplier);
        $old->isSociety = intval($old->isSociety);
        $old->isActive = intval($old->isActive);
        $old->contact = json_encode(json_decode($old->contact), JSON_PRETTY_PRINT);

        if ($this->model->log->addLog($userName, "SupplierModel", "Edit", $idSupplier, json_encode($old), json_encode($array))) {
            if (!$this->helper->db->update($this->supplierTable, $array, array('idSupplier' => $idSupplier))) {
                $obj->state = 0;
                $obj->error = "Erreur lors de l'edition du fournisseur dans la base de donnée";
            } else {
                $obj->state = 1;
            }
        } else {
            $obj->state = 0;
            $obj->error = "Erreur lors de l'ajout du log. Le fournisseur n'as pas été modifié";
        }

        return $obj;
    }

    public function deleteSupplier($value)
    {
        $obj = new stdClass();
        $idSupplier = $value->idWp;
        $userName = $value->loginUserName;
        $old = $this->helper->db->get_where($this->supplierTable, array('idSupplier' => $idSupplier))[0];
        $old->contact = json_encode(json_decode($old->contact), JSON_PRETTY_PRINT);

        if ($this->model->log->addLog($userName, "SupplierModel", "Delete", $idSupplier, json_encode($old))) {
            if (!$this->helper->db->delete($this->supplierTable, array('idSupplier' => $idSupplier))) {
                $obj->state = 0;
                $obj->error = "Erreur lors de la suppression du fournisseur (site)";
            } else {
                $obj->state = 1;
            }
        } else {
            $obj->state = 0;
            $obj->error = "Erreur lors de l'ajout du log. Le fournisseur n'as pas été supprimé";
        }

        return $obj;
    }
}