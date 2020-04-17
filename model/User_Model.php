<?php


class User_Model extends Model
{
    protected $table;

    public function __construct()
    {

        $this->loadHelper("randomizer");
        $this->loadModel("perms");
        $this->loadHelper("db");
        $this->loadHelper("session");
        $this->loadHelper("url");
        $this->table = $this->helper->db->getPrefix() . '_shop_shoplogin';

    }

    public function addUser($request)
    {
        $userName = htmlspecialchars(trim($request->get('addUserName')));
        if ($this->isUserExist($userName)) {
            $this->helper->session->set_flashdata("error", "L'utilisateur existe déjà dans la base de donnée");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
        } else {
            if ($request->get('addUserPass') == null OR $request->get('addUserPass') == "") {
                $userPass = $this->helper->randomizer->randomizeString(8);
                $defaultPass = 1;
            } else {
                $userPass = $this->cryptPass(htmlspecialchars(trim($request->get('addUserPass'))));
                $defaultPass = 0;
            }
            if ($request->get('addModelPerms') == 0) {
                $admin = $request->get('permsAdmin') != null ? 1 : 0;
                $compta = $request->get('permsCompta') != null ? 1 : 0;
                $product = $request->get('permsProducts') != null ? 1 : 0;
                $supplier = $request->get('permsSupplier') != null ? 1 : 0;
                $stock = $request->get('permsStock') != null ? 1 : 0;
                $caisse = $request->get('permsCaisse') != null ? 1 : 0;
            } else if ($this->model->perms->isPermsExist($request->get('addModelPerms'))) {
                $temp = $this->model->perms->getPerm($request->get('addModelPerms'));
                $admin = $temp->hasAdmin;
                $compta = $temp->hasCompta;
                $product = $temp->hasProductManagement;
                $supplier = $temp->hasSupplierManagement;
                $stock = $temp->hasStock;
                $caisse = $temp->hasCaisse;
            } else {
                $admin = 0;
                $compta = 0;
                $product = 0;
                $supplier = 0;
                $stock = 0;
                $caisse = 0;
            }
            $data = array(
                'usernameShopLogin' => $userName,
                'passwordShopLogin' => $userPass,
                'hasAdmin' => $admin,
                'hasCompta' => $compta,
                'hasProductManagement' => $product,
                'hasSupplierManagement' => $supplier,
                'hasStock' => $stock,
                'hasCaisse' => $caisse,
                'isDefaultPass' => $defaultPass
            );
            if (!$this->helper->db->insert($this->table, $data)) {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de l'ajout de l'utilisater");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            } else {
                $this->helper->session->set_flashdata("success", "L'utilisateur' a bien été ajouté");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            }
        }

    }

    public function isUserExist($name)
    {
        return count($this->helper->db->get_where($this->table, array('usernameShopLogin' => $name))) != 0 ? TRUE : FALSE;

    }

    public function getUsers()
    {
        return $this->helper->db->get($this->table);
    }

    public function getUserLike($request)
    {
        return $this->helper->db->get_like($this->table, array('usernameShopLogin' => array($request->get('searchUserName'), 'after')));
    }

    public function editUser($request)
    {
        $id = $request->get('id');
        if ($this->isUserId($id)) {
            $oldUser = $this->getUserById($id);
            $userName = htmlspecialchars($request->get('userName'));
            $admin = $request->get('permsAdmin') != null ? 1 : 0;
            $compta = $request->get('permsCompta') != null ? 1 : 0;
            $product = $request->get('permsProducts') != null ? 1 : 0;
            $supplier = $request->get('permsSupplier') != null ? 1 : 0;
            $stock = $request->get('permsStock') != null ? 1 : 0;
            $caisse = $request->get('permsCaisse') != null ? 1 : 0;

            if ($oldUser->usernameShopLogin != $userName) {
                if ($this->isUserExist($userName)) {
                    $this->helper->session->set_flashdata("error", "L'utilisateur existe déjà dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                }
            }

            $data = array(
                'usernameShopLogin' => $userName,
                'hasAdmin' => $admin,
                'hasCompta' => $compta,
                'hasProductManagement' => $product,
                'hasSupplierManagement' => $supplier,
                'hasStock' => $stock,
                'hasCaisse' => $caisse,
            );
            if (!$this->helper->db->update($this->table, $data, array('idShopLogin' => $id))) {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de la modification de l'utilisater");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            } else {
                $this->helper->session->set_flashdata("success", "L'utilisateur' a bien été modifié");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            }

        } else {
            $this->helper->session->set_flashdata("error", "L'utilisateur spécifié est introuvable");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
        }
    }

    public function getUserById($id)
    {
        $query = $this->helper->db->get_where($this->table, array('idShopLogin' => $id));
        return $query[0];
    }

    public function isUserId($id)
    {
        return count($this->helper->db->get_where($this->table, array('idShopLogin' => $id))) != 0 ? TRUE : FALSE;
    }

    function cryptPass($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function deleteUser($request)
    {
        $id = $request->get('userId');
        if ($this->isUserId($id)) {
            if (!$this->helper->db->delete($this->table, array('idShopLogin' => $id))) {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de la suppression de l'utilisater");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            } else {
                $this->helper->session->set_flashdata("success", "L'utilisateur' a bien été supprimé");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            }
        } else {
            $this->helper->session->set_flashdata("error", "L'utilisateur spécifié est introuvable");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
        }
    }

    public function resetPassword($request)
    {
        $id = $request->get('userId');
        if ($this->isUserId($id)) {
            $data = array('passwordShopLogin' => $this->helper->randomizer->randomizeString(8),
                'isDefaultPass' => 1);
            if (!$this->helper->db->update($this->table, $data, array('idShopLogin' => $id))) {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de la reinitialisation du mot de passe de l'utilisater");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            } else {
                $this->helper->session->set_flashdata("success", "Le mot de passe utilisateur' a bien été réinitialisé");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            }
        } else {
            $this->helper->session->set_flashdata("error", "L'utilisateur spécifié est introuvable");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
        }
    }


}