<?php


class Log_Model extends Model
{
    protected $table;
    protected $supplierTable;
    protected $userTable;
    protected $permsTable;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->loadHelper('session');
        $this->loadHelper('url');
        $this->table = $this->helper->db->getPrefix() . '_shop_Log';
        $this->supplierTable = $this->helper->db->getPrefix() . '_shop_Supplier';
        $this->userTable = $this->helper->db->getPrefix() . '_shop_ShopLogin';
        $this->permsTable = $this->helper->db->getPrefix() . '_shop_PermissionModel';
    }

    /**
     * @description This method is used to add a log on database
     * @param $userLog
     * @param $typeLog
     * @param $actionLog
     * @param null $targetIdLog
     * @param null $beforeLog
     * @param null $afterLog
     * @return bool
     */

    public function addLog($userLog, $typeLog, $actionLog, $targetIdLog = null, $beforeLog = null, $afterLog = null)
    {
        $data = array(
            'userLog' => $userLog,
            'typeLog' => $typeLog,
            'actionLog' => $actionLog,
            'targetIdLog' => $targetIdLog,
            'beforeLog' => $beforeLog,
            'afterLog' => $afterLog
        );
        return !$this->helper->db->insert($this->table, $data) ? false : true;
    }

    public function addId($idLog, $targetId)
    {
        return $this->helper->db->update($this->table, array('targetIdLog' => $targetId), array("idLog" => $idLog));
    }

    public function getList()
    {
        return $this->helper->db->get($this->table, "dateLog ASC");
    }

    public function getLog($idLog)
    {
        return $this->helper->db->get_where($this->table, array('idLog' => $idLog))[0];
    }

    public function deleteLog($idLog)
    {
        return $this->helper->db->delete($this->table, array('idLog' => $idLog));
    }

    /**
     * @param $idLog
     * @param bool $isApi
     */
    public function rollback($idLog, $isApi = false, $userName = "")
    {
        $obj = new stdClass();
        $log = $this->getLog($idLog);
        if (!$isApi) {
            $userName = wp_get_current_user()->user_login . "(site)(RB)";
        }
        if ($log == null) {
            if (!$isApi) {
                $this->helper->session->set_flashdata("error", "Le log n'existe pas dans la base de donnée");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
            } else {
                $obj->state = 0;
                $obj->error = "Le log n'existe pas dans la base de donnée";
            }
        } else {
            $actionLog = $log->actionLog;
            switch (mb_strtolower($actionLog)) {
                case "create":
                    $temp = $this->getTable($log->typeLog);
                    if ($this->isExistOnTable($temp, $log->targetIdLog)) {
                        if ($this->addLog($userName, $log->typeLog, "Delete", $log->targetIdLog, $log->afterLog)) {
                            $tempIdLog = $this->helper->db->getLastId();

                            if (!$this->helper->db->delete($temp->table, array($temp->id => $log->targetIdLog))) {
                                $this->deleteLog($tempIdLog);
                                if (!$isApi) {
                                    $this->helper->session->set_flashdata("error", "Erreur interne lors de l'opération");
                                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                                } else {
                                    $obj->state = 0;
                                    $obj->error = "Erreur interne lors de l'opération";
                                }
                            } else {
                                if (!$isApi) {
                                    $this->helper->session->set_flashdata("success", "L'opération a bien été effectuée");
                                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                                } else {
                                    $obj->state = 1;
                                }
                            }
                        } else {
                            if (!$isApi) {
                                $this->helper->session->set_flashdata("error", "Erreur lors de l'ajout du log. L'opération n'as pas été effectuée");
                                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                            } else {
                                $obj->state = 0;
                                $obj->error = "Erreur lors de l'ajout du log. L'opération n'as pas été effectuée";
                            }
                        }
                    } else {
                        if (!$isApi) {
                            $this->helper->session->set_flashdata("error", "Aucun objet trouvé avec cet ID l'opération n'as pas été effectuée");
                            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                        } else {
                            $obj->state = 0;
                            $obj->error = "Aucun objet trouvé avec cet ID l'opération n'as pas été effectuée";
                        }
                    }
                    break;
                case "edit":
                    $temp = $this->getTable($log->typeLog);
                    if ($this->isExistOnTable($temp, $log->targetIdLog)) {
                        if ($this->addLog($userName, $log->typeLog, "Edit", $log->targetIdLog, $log->afterLog, $log->beforeLog)) {
                            $tempIdLog = $this->helper->db->getLastId();
                            $data = json_decode($log->beforeLog, true);
                            if (!$this->helper->db->update($temp->table, $data, array($temp->id => $log->targetIdLog))) {
                                $this->deleteLog($tempIdLog);
                                if (!$isApi) {
                                    $this->helper->session->set_flashdata("error", "Erreur interne lors de l'opération");
                                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                                } else {
                                    $obj->state = 0;
                                    $obj->error = "Erreur interne lors de l'opération";
                                }
                            } else {
                                if (!$isApi) {
                                    $this->helper->session->set_flashdata("success", "L'opération a bien été effectuée");
                                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                                } else {
                                    $obj->state = 1;
                                }
                            }
                        } else {
                            if (!$isApi) {
                                $this->helper->session->set_flashdata("error", "Erreur lors de l'ajout du log. L'opération n'as pas été effectuée");
                                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                            } else {
                                $obj->state = 0;
                                $obj->error = "Erreur lors de l'ajout du log. L'opération n'as pas été effectuée";
                            }
                        }
                    } else {
                        if (!$isApi) {
                            $this->helper->session->set_flashdata("error", "Aucun objet trouvé avec cet ID l'opération n'as pas été effectuée");
                            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                        } else {
                            $obj->state = 0;
                            $obj->error = "Aucun objet trouvé avec cet ID l'opération n'as pas été effectuée";
                        }
                    }

                    break;
                case "delete":
                    $temp = $this->getTable($log->typeLog);
                    if (!$this->isExistOnTable($temp, $log->targetIdLog)) {
                        if ($this->addLog($userName, $log->typeLog, "Create", $log->targetIdLog, null, $log->beforeLog)) {
                            $tempIdLog = $this->helper->db->getLastId();
                            $data = json_decode($log->beforeLog, true);
                            var_dump($temp, $data);

                            if (!$this->helper->db->insert($temp->table, $data)) {
                                $this->deleteLog($tempIdLog);
                                if (!$isApi) {
                                    $this->helper->session->set_flashdata("error", "Erreur interne lors de l'opération");
                                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                                } else {
                                    $obj->state = 0;
                                    $obj->error = "Erreur interne lors de l'opération";
                                }
                            } else {
                                if (!$isApi) {
                                    $this->helper->session->set_flashdata("success", "L'opération a bien été effectuée");
                                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                                } else {
                                    $obj->state = 1;
                                }
                            }
                        } else {
                            if (!$isApi) {
                                $this->helper->session->set_flashdata("error", "Erreur lors de l'ajout du log. L'opération n'as pas été effectuée");
                                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                            } else {
                                $obj->state = 0;
                                $obj->error = "Erreur lors de l'ajout du log. L'opération n'as pas été effectuée";
                            }
                        }
                    } else {
                        if (!$isApi) {
                            $this->helper->session->set_flashdata("error", "Un objet trouvé avec cet ID l'opération n'as pas été effectuée (impossible de recréer un id identique)");
                            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                        } else {
                            $obj->state = 0;
                            $obj->error = "Un objet trouvé avec cet ID l'opération n'as pas été effectuée (impossible de recréer un id identique)";
                        }
                    }

                    break;
                default:
                    if (!$isApi) {
                        $this->helper->session->set_flashdata("error", "L'action du log est inconnu le rollback n'as pas été effectué");
                        $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/logs");
                    } else {
                        $obj->error = 0;
                        $obj->state = "L'action du log est inconnu, le rollback n'as pas été effectué";
                    }
                    break;
            }
            if ($isApi) {
                return $obj;
            }
        }
    }

    /**
     * @description Get SqlTableName for log by typeLog
     * @param $typeLog
     * @return string|null
     */
    function getTable($typeLog)
    {
        $obj = new stdClass();
        switch (mb_strtolower($typeLog)) {
            case "permissionmodel":
                $obj->table = $this->permsTable;
                $obj->id = "idPermissionModel";
                return $obj;
                break;
            case "suppliermodel":
                $obj->table = $this->supplierTable;
                $obj->id = "idSupplier";
                return $obj;
                break;
            case "usermodel":
                $obj->table = $this->userTable;
                $obj->id = "idShopLogin";
                return $obj;
                break;
            default:
                return null;
                break;
        }
    }

    function isExistOnTable($temp, $id)
    {
        return count($this->helper->db->get_where($temp->table, array($temp->id => $id))) != 0 ? TRUE : FALSE;
    }

    public function jsonToReadable($json)
    {
        $obj = json_decode($json, true);
        $str = "";
        foreach ($obj as $key => $value) {
            if ($key == "contact") {
                $temp1 = "";
                $obj2 = json_decode($value, true);
                foreach ($obj2 as $key2 => $val2) {
                    $temp2 = "strongOpen" . $this->keyToRead($key2) . "strongClose : " . $val2 . "\n";
                    $temp1 .= $temp2;
                }
                $str .= $temp1;
            } else {
                $temp = "strongOpen" . $this->keyToRead($key) . "strongClose : " . $value . "\n";
                $str .= $temp;
            }
        }
        return $str;
    }

    function keyToRead($key)
    {
        $str = "";
        switch ($key) {
            case "idPermissionModel":
            case "idShopLogin":
            case "idSupplier":
                $str = "ID";
                break;
            case "namePermissionModel":
                $str = "Nom du modèle de permission";
                break;
            case "hasAdmin" :
                $str = "Accès admin";
                break;
            case "hasCompta" :
                $str = "Accès compta";
                break;
            case "hasProductManagement" :
                $str = "Accès gestion produit";
                break;
            case "hasSupplierManagement" :
                $str = "Accès gestion fournisseurs";
                break;
            case "hasStock" :
                $str = "Gestion des stocks";
                break;
            case "hasCaisse":
                $str = "Accès caisse";
                break;
            case "usernameShopLogin" :
                $str = "Nom d'utilisateur";
                break;
            case "passwordShopLogin" :
                $str = "Mot de passe utilisateur";
                break;
            case "isDefaultPass" :
                $str = "Mot de passe par défaut";
                break;
            case "isSociety":
                $str = "Est une société ?";
                break;
            case "societyName":
                $str = "Nom de la société";
                break;
            case "gender" :
                $str = "Genre";
                break;
            case "firstName":
                $str = "Prénom";
                break;
            case "lastName":
                $str = "Nom";
                break;
            case "address":
                $str = "Adresse";
                break;
            case "zipCode":
                $str = "Code Postal";
                break;
            case "city":
                $str = "Ville";
                break;
            case "country":
                $str = "Pays";
                break;
            case "phone":
                $str = "Téléphone";
                break;
            case "mobilePhone":
                $str = "Portable";
                break;
            case "mail":
                $str = "Adresse mail";
                break;
            case "refCode" :
                $str = "Code fournisseur";
                break;
            case "webSite":
                $str = "Site web";
                break;
            case "paymentType":
                $str = "Moyen de payement";
                break;
            case "iban":
                $str = "IBAN";
                break;
            case "bic" :
                $str = "BIC/SWIFT";
                break;
            case "tva" :
                $str = "Numéro de TVA";
                break;
            case "siret":
                $str = "Numéro de SIRET";
                break;
            case "contact" :
                $str = "Contact";
                break;
            case "notes":
                $str = "Notes";
                break;
            case "isActive" :
                $str = "Actif";
                break;
            case "directionName":
                $str = "Nom Direction";
                break;
            case "directionPhone":
                $str = "Téléphone Direction";
                break;
            case "directionMail":
                $str = "Mail Direction";
                break;
            case "comptaName":
                $str = "Nom Compta";
                break;
            case "comptaMail":
                $str = "Téléphone Compta";
                break;
            case "comptaPhone":
                $str = "Mail Compta";
                break;
            case "comName":
                $str = "Nom Commercial";
                break;
            case "comMail":
                $str = "Téléphone Commercial";
                break;
            case "comPhone":
                $str = "Mail Commercial";
                break;
        }
        return $str;
    }

    public function getApiLogs()
    {
        $logs = $this->getList();
        $arr = array();
        require_once dirname(__FILE__) . '/../helper/Diff.php';

        // Options for generating the diff
        $options = array(
            //'ignoreWhitespace' => true,
            //'ignoreCase' => true,
        );

        foreach ($logs as $log) {
            $obj = new stdClass();
            $obj->idLog = $log->idLog;
            if ($log->before == "" || $log->before == "NULL"){
                $a = "\n";
            }else{
                $a = $this->jsonToReadable($log->beforeLog);
            }
            if ($log->after == "" || $log->afer == "NULL"){
                $b = "\n";
            }else{
                $b = $this->jsonToReadable($log->afterLog);
            }

            // Initialize the diff class
            $diff = new Diff(explode("\n", $a), explode("\n", $b), $options);

            require_once dirname(__FILE__) . "/../helper/Diff/Renderer/Html/SideBySide.php";

            $renderer = new Diff_Renderer_Html_SideBySide;
            $tempDiff = str_replace("\\n", "<br>", $diff->Render($renderer));
            $tempDiff = str_replace("\\", "", $tempDiff);
            $tempDiff = str_replace("strongOpen", "<strong>", $tempDiff);
            $tempDiff = str_replace("strongClose", "</strong>", $tempDiff);
            var_dump($diff->Render($renderer));
            $obj->diff = $tempDiff;
           // array_push($arr, $obj);
        }
        return $arr;
    }
}