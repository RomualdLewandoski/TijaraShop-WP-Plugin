<?php


class Perms_Model extends Model
{
    protected $table;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->loadHelper('url');
        $this->loadHelper('session');
        $this->table = $this->helper->db->getPrefix() . '_shop_permissionmodel';

    }

    /**
     * @param $request
     * @description Used to add a perms model
     */
    public function addPerms($request)
    {
        $name = htmlspecialchars($request->get('permsName'));
        if ($this->isPermsNameUsed($name)) {
            $this->helper->session->set_flashdata("error", "Un modèle de permission porte déja ce nom");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
        }
        $admin = $request->get('permsAdmin') != null ? 1 : 0;
        $compta = $request->get('permsCompta') != null ? 1 : 0;
        $product = $request->get('permsProducts') != null ? 1 : 0;
        $supplier = $request->get('permsSupplier') != null ? 1 : 0;
        $stock = $request->get('permsStock') != null ? 1 : 0;
        $caisse = $request->get('permsCaisse') != null ? 1 : 0;

        $data = array(
            'namePermissionModel' => $name,
            'hasAdmin' => $admin,
            'hasCompta' => $compta,
            'hasProductManagement' => $product,
            'hasSupplierManagement' => $supplier,
            'hasStock' => $stock,
            'hasCaisse' => $caisse
        );
        if (!$this->helper->db->insert($this->table, $data)) {
            $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de l'ajout du modèle de permission");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
        } else {
            $this->helper->session->set_flashdata("success", "Le modèle de permission a bien été ajouté");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
        }
    }

    /**
     * @description retrieve a list of all permission model currently existing inside DB
     */
    public function listPerms()
    {
        return $this->helper->db->get($this->table);
    }

    public function getPermsLike($request)
    {
        return $this->helper->db->get_like($this->table, array('namePermissionModel' => array($request->get('searchPermsName'), 'before')));
    }

    /**
     * @param $request
     * @description Edit a specific perms model (By his ID)
     */
    public function editPerms($request)
    {
        $id = $request->get('id');
        if ($this->isPermsExist($id)) {
            $oldPerms = $this->getPerm($id);
            $name = htmlspecialchars($request->get('permsName'));
            if ($name != $oldPerms->namePermissionModel) {
                if ($this->isPermsNameUsed($name)) {
                    $this->helper->session->set_flashdata("error", "Un modèle de permission porte déja ce nom");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
                }
            }
            $admin = $request->get('permsAdmin') != null ? 1 : 0;
            $compta = $request->get('permsCompta') != null ? 1 : 0;
            $product = $request->get('permsProducts') != null ? 1 : 0;
            $supplier = $request->get('permsSupplier') != null ? 1 : 0;
            $stock = $request->get('permsStock') != null ? 1 : 0;
            $caisse = $request->get('permsCaisse') != null ? 1 : 0;

            $data = array(
                'namePermissionModel' => $name,
                'hasAdmin' => $admin,
                'hasCompta' => $compta,
                'hasProductManagement' => $product,
                'hasSupplierManagement' => $supplier,
                'hasStock' => $stock,
                'hasCaisse' => $caisse
            );
            if (!$this->helper->db->update($this->table, $data, array('idPermissionModel' => $id))) {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue pendant la modification du modèle de permission");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
            } else {
                $this->helper->session->set_flashdata("success", "Le modèle de permission à bien été modifié");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
            }
        } else {
            $this->helper->session->set_flashdata("error", "L'id du modèle de permission n'existe pas dans la base de donnée");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");

        }
    }

    /**
     * @param $request
     * @description Delete a specific perms model (By his ID)
     */
    public function deletePerms($request)
    {
        $id = $request->get('permsId');
        if ($this->isPermsExist($id)) {
            if (!$this->helper->db->delete($this->table, array('idPermissionModel' => $id))) {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de la suppression du modèle de permission");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
            } else {
                $this->helper->session->set_flashdata("success", "Le modèle de permission à bien été supprimé");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
            }
        } else {
            $this->helper->session->set_flashdata("error", "L'id du modèlede permission n'existe pas dans la base de donnée");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/perms");
        }
    }

    /**
     * @param $id
     * @description Get all value of a specific perms model (by ID)
     */
    public function getPerm($id)
    {
        if ($this->isPermsExist($id)) {
            $query = $this->helper->db->get_where($this->table, array('idPermissionModel' => $id));
            return $query[0];
        }
    }

    /**
     * @param $id
     * @return bool
     * @description tell if the specific ID is actually used on permsModel
     */
    public function isPermsExist($id)
    {
        return count($this->helper->db->get_where($this->table, array('idPermissionModel' => $id))) != 0 ? TRUE : FALSE;
    }

    public function isPermsNameUsed($name)
    {
        return count($this->helper->db->get_where($this->table, array('namePermissionModel' => $name))) != 0 ? TRUE : FALSE;

    }
}