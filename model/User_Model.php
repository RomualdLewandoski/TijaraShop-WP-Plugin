<?php


class User_Model extends Model
{
    protected $table;

    public function __construct()
    {

        $this->loadHelper("randomizer");
        $this->loadModel("perms");
        $this->loadModel("log");
        $this->loadHelper("db");
        $this->loadHelper("session");
        $this->loadHelper("url");
        $this->table = $this->helper->db->getPrefix() . '_shop_ShopLogin';

    }

    /**
     * @description Create our first User for software
     * @used Only on installation
     * @param $userName
     * @param $password
     * @return bool
     * @see Install_Model::makeInstall()
     */
    public function createAdminUser($userName, $password)
    {
        $userName = htmlspecialchars(trim($userName));
        $password = htmlspecialchars(trim($password));
        $cryptPass = $this->cryptPass($password);
        $data = array(
            'usernameShopLogin' => $userName,
            'passwordShopLogin' => $cryptPass,
            'hasAdmin' => 1,
            'hasCompta' => 1,
            'hasProductManagement' => 1,
            'hasSupplierManagement' => 1,
            'hasStock' => 1,
            'hasCaisse' => 1,
            'isDefaultPass' => 0
        );
        return $this->helper->db->insert($this->table, $data) != false;
    }

    /**
     * @param $request
     */
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

            if ($this->model->log->addLog(wp_get_current_user()->user_login . "(site)", "UserModel", "Create", "", "", json_encode($data))) {
                if (!$this->helper->db->insert($this->table, $data)) {
                    $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de l'ajout de l'utilisateur");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                } else {
                    $this->helper->session->set_flashdata("success", "L'utilisateur a bien été ajouté");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                }
            } else {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de l'ajout du log. L'utilisateur n'as pas été ajouté");
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
        return $this->helper->db->get_like($this->table, array('usernameShopLogin' => array($request->get('searchUserName'), 'before')));
    }

    /**
     * @param $request
     */
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
                'passwordShopLogin' => $oldUser->passwordShopLogin,
                'hasAdmin' => $admin,
                'hasCompta' => $compta,
                'hasProductManagement' => $product,
                'hasSupplierManagement' => $supplier,
                'hasStock' => $stock,
                'hasCaisse' => $caisse,
                'isDefaultPass' => intval($oldUser->isDefaultPass)
            );

            unset($oldUser->idShopLogin);
            $oldUser->hasAdmin = intval($oldUser->hasAdmin);
            $oldUser->hasCompta = intval($oldUser->hasCompta);
            $oldUser->hasProductManagement = intval($oldUser->hasProductManagement);
            $oldUser->hasSupplierManagement = intval($oldUser->hasSupplierManagement);
            $oldUser->hasStock = intval($oldUser->hasStock);
            $oldUser->hasCaisse = intval($oldUser->hasCaisse);
            $oldUser->isDefaultPass = intval($oldUser->isDefaultPass);

            if ($this->model->log->addLog(wp_get_current_user()->user_login . "(site)", "UserModel", "Edit", $id, json_encode($oldUser), json_encode($data))) {
                if (!$this->helper->db->update($this->table, $data, array('idShopLogin' => $id))) {
                    $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de la modification de l'utilisateur");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                } else {
                    $this->helper->session->set_flashdata("success", "L'utilisateur a bien été modifié");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                }
            } else {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors l'ajout du log. L'utilisateur n'as pas été modifié");
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

    /**
     * @param $request
     */
    public function deleteUser($request)
    {
        $id = $request->get('userId');
        if ($this->isUserId($id)) {
            $oldUser = $this->getUserById($id);

            if ($this->model->log->addLog(wp_get_current_user()->user_login . "(site)", "USerModel", "Delete", $id, json_encode($oldUser))) {
                if (!$this->helper->db->delete($this->table, array('idShopLogin' => $id))) {
                    $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de la suppression de l'utilisateur");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                } else {
                    $this->helper->session->set_flashdata("success", "L'utilisateur a bien été supprimé");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                }
            } else {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors l'ajout du log. L'utilisateur n'as pas été supprimé");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            }

        } else {
            $this->helper->session->set_flashdata("error", "L'utilisateur spécifié est introuvable");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
        }
    }

    /**
     * @param $request
     */
    public function resetPassword($request)
    {
        $id = $request->get('userId');
        if ($this->isUserId($id)) {
            $data = array('passwordShopLogin' => $this->helper->randomizer->randomizeString(8),
                'isDefaultPass' => 1);

            if ($this->model->log->addLog(wp_get_current_user()->user_login . "(site)", "USerModel", "ResetPass", $id)) {
                if (!$this->helper->db->update($this->table, $data, array('idShopLogin' => $id))) {
                    $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de la reinitialisation du mot de passe de l'utilisateur");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                } else {
                    $this->helper->session->set_flashdata("success", "Le mot de passe utilisateur a bien été réinitialisé");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
                }
            } else {
                $this->helper->session->set_flashdata("error", "Une erreur interne est survenue lors de l'ajout du log. La reinitialisation du mot de passe de l'utilisateur n'as pas été effectuée");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
            }
        } else {
            $this->helper->session->set_flashdata("error", "L'utilisateur spécifié est introuvable");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/users");
        }
    }

    /**
     * @param $idShopLogin
     * @param $newPass
     * @return stdClass
     */
    public function updatePassword($idShopLogin, $newPass, $userName)
    {
        $data = array(
            "passwordShopLogin" => $newPass,
            "isDefaultPass" => 0
        );
        $obj = new stdClass();

        if ($this->model->log->addLog($userName, "UserModel", "ChangePass", $idShopLogin)) {
            if (!$this->helper->db->update($this->table, $data, array('idShopLogin' => $idShopLogin))) {
                $obj->state = 0;
                $obj->error = "Erreur interne dans l'api lors de la mise a jour du mot de passe";
            } else {
                $obj->state = 1;
            }
        } else {
            $obj->state = 0;
            $obj->error = "Erreur interne lors de l'ajout du log. Le mot de passe n'as pas été modifié";
        }

        return $obj;
    }


}