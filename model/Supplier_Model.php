<?php


class Supplier_Model extends Model
{
    protected $table;

    public function __construct()
    {
        $this->loadHelper('db');
        $this->loadHelper('session');
        $this->loadHelper('url');
        $this->table = $this->helper->db->getPrefix() . '_shop_Supplier';

    }

    /**
     * @param $request
     * @param bool $isApi => this will be helpfull to know wath is return type we ll use
     */
    public function addSupplier($request, $isApi = false)
    {
        if ($isApi) {
            $isSociety = $request->get('isSociety');
        } else {
            $isSociety = $request->get('isSociety') != null ? 1 : 0;
        }
        $societyName = $request->get('societyName');
        $gender = htmlspecialchars($request->get('gender'));
        $firstName = htmlspecialchars($request->get('firstName'));
        $lastName = htmlspecialchars($request->get('lastName'));
        $address = htmlspecialchars($request->get('address'));
        $zipCode = htmlspecialchars($request->get('zipCode'));
        $city = htmlspecialchars($request->get('city'));
        $country = htmlspecialchars($request->get('country'));
        $phone = htmlspecialchars($request->get('phone'));
        $mobilePhone = htmlspecialchars($request->get('mobilePhone'));
        $mail = htmlspecialchars($request->get('mail'));
        $refCode = htmlspecialchars($request->get('refCode'));
        $webSite = htmlspecialchars($request->get('webSite'));
        $paymentType = htmlspecialchars($request->get('paymentType'));
        $iban = htmlspecialchars($request->get('iban'));
        $bic = htmlspecialchars($request->get('bic'));
        $tva = htmlspecialchars($request->get('tva'));
        $siret = htmlspecialchars($request->get('siret'));
        $directionName = htmlspecialchars($request->get('directionName'));
        $directionMail = htmlspecialchars($request->get('directionMail'));
        $directionPhone = htmlspecialchars($request->get('directionPhone'));
        $comptaName = htmlspecialchars($request->get('comptaName'));
        $comptaMail = htmlspecialchars($request->get('comptaMail'));
        $comptaPhone = htmlspecialchars($request->get('comptaPhone'));
        $comName = htmlspecialchars($request->get('comName'));
        $comMail = htmlspecialchars($request->get('comMail'));
        $comPhone = htmlspecialchars($request->get('comPhone'));
        if ($isApi) {
            $contactStr = base64_decode($request->get('contact'));
        } else {
            $contact = new stdClass();
            $contact->directionName = $directionName;
            $contact->directionMail = $directionMail;
            $contact->directionPhone = $directionPhone;
            $contact->comptaName = $comptaName;
            $contact->comptaMail = $comptaMail;
            $contact->comptaPhone = $comptaPhone;
            $contact->comName = $comName;
            $contact->comMail = $comMail;
            $contact->comPhone = $comPhone;
            $contactStr = json_encode($contact);
        }
        $notes = htmlspecialchars($request->get('notes'));
        $isActive = $request->get('isActive') != null ? 1 : 0;
        if ($isApi) {
            $result = new stdClass();
        }
        if ($siret != null) {
            if ($this->getBy("siret", $siret) != null) {
                if ($isActive) {
                    $result->state = 0;
                    $result->error = "Le numéro de SIRET existe déja dans la base de donnée";
                } else {
                    $this->helper->session->set_flashdata("error", "Le numéro de SIRET existe déja dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            }
        }
        if ($tva != null) {
            if ($this->getBy("tva", $tva) != null) {
                if ($isApi) {
                    $result->state = 0;
                    $result->error = "Le numéro de TVA existe déja dans la base de donnée";
                } else {
                    $this->helper->session->set_flashdata("error", "Le numéro de TVA existe déja dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            }
        }
        if ($refCode != null) {
            if ($this->getBy("refCode", $refCode) != null) {
                if ($isApi) {
                    $result->state = 0;
                    $result->error = "Le numéro de référence Fournisseur existe déja dans la base de donnée";
                } else {
                    $this->helper->session->set_flashdata("error", "Le numéro de référence Fournisseur existe déja dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            }
        }
        if ($societyName != null) {

            if ($this->getBy("societyName", $societyName) != null) {
                if ($isApi) {
                    $result->state = 0;
                    $result->error = "La société existe déja dans la base de donnée";
                } else {
                    $this->helper->session->set_flashdata("error", "La société existe déja dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            }
        }

        $data = array(
            'isSociety' => $isSociety,
            'societyName' => $societyName,
            'gender' => $gender,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'address' => $address,
            'zipCode' => $zipCode,
            'city' => $city,
            'country' => $country,
            'phone' => $phone,
            'mobilePhone' => $mobilePhone,
            'mail' => $mail,
            'refCode' => $refCode,
            'webSite' => $webSite,
            'paymentType' => $paymentType,
            'iban' => $iban,
            'bic' => $bic,
            'tva' => $tva,
            'siret' => $siret,
            'contact' => $contactStr,
            'notes' => $notes,
            'isActive' => $isActive
        );

        if (!$this->helper->db->insert($this->table, $data)) {
            if ($isApi) {
                $result->state = 0;
                $result->error = "Erreur lors de l'ajout du fournisseur dans la base de donnée";
            } else {
                $this->helper->session->set_flashdata("error", "Erreur lors de l'ajout du fournisseur dans la base de donnée");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
            }
        } else {
            if ($isApi) {
                $result->state = 1;
                $result->idWp = $this->getBy("societyName", $societyName)[0]->idSupplier;

            } else {
                $this->helper->session->set_flashdata("success", "Le fournisseur a bien été ajouté");
                $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
            }
        }

        if ($isApi) {
            return $result;
        }

    }

    public function getBy($row, $value)
    {
        return $this->helper->db->get_where($this->table, array($row => $value));
    }

    public function listSupplier()
    {
        return $this->helper->db->get($this->table);
    }

    public function isExist($row, $value)
    {
        return count($this->getBy($row, $value)) != 0 ? TRUE : FALSE;
    }

    public function deleteSupplier($id)
    {
        if (!$this->helper->db->delete($this->table, array('idSupplier' => $id))) {
            $this->helper->session->set_flashdata("error", "Erreur lors de la suppression du fournisseur dans la base de donnée");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
        } else {
            $this->helper->session->set_flashdata("success", "Le fournisseur a bien été supprimé");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
        }
    }

    public function editSupplier($request)
    {
        $idSupplier = $request->get('idSupplier');
        $isSociety = $request->get('isSociety') != null ? 1 : 0;
        $societyName = $request->get('societyName');
        $gender = htmlspecialchars($request->get('gender'));
        $firstName = htmlspecialchars($request->get('firstName'));
        $lastName = htmlspecialchars($request->get('lastName'));
        $address = htmlspecialchars($request->get('address'));
        $zipCode = htmlspecialchars($request->get('zipCode'));
        $city = htmlspecialchars($request->get('city'));
        $country = htmlspecialchars($request->get('country'));
        $phone = htmlspecialchars($request->get('phone'));
        $mobilePhone = htmlspecialchars($request->get('mobilePhone'));
        $mail = htmlspecialchars($request->get('mail'));
        $refCode = htmlspecialchars($request->get('refCode'));
        $webSite = htmlspecialchars($request->get('webSite'));
        $paymentType = htmlspecialchars($request->get('paymentType'));
        $iban = htmlspecialchars($request->get('iban'));
        $bic = htmlspecialchars($request->get('bic'));
        $tva = htmlspecialchars($request->get('tva'));
        $siret = htmlspecialchars($request->get('siret'));
        $directionName = htmlspecialchars($request->get('directionName'));
        $directionMail = htmlspecialchars($request->get('directionMail'));
        $directionPhone = htmlspecialchars($request->get('directionPhone'));
        $comptaName = htmlspecialchars($request->get('comptaName'));
        $comptaMail = htmlspecialchars($request->get('comptaMail'));
        $comptaPhone = htmlspecialchars($request->get('comptaPhone'));
        $comName = htmlspecialchars($request->get('comName'));
        $comMail = htmlspecialchars($request->get('comMail'));
        $comPhone = htmlspecialchars($request->get('comPhone'));
        $contact = new stdClass();
        $contact->directionName = $directionName;
        $contact->directionMail = $directionMail;
        $contact->directionPhone = $directionPhone;
        $contact->comptaName = $comptaName;
        $contact->comptaMail = $comptaMail;
        $contact->comptaPhone = $comptaPhone;
        $contact->comName = $comName;
        $contact->comMail = $comMail;
        $contact->comPhone = $comPhone;
        $contactStr = json_encode($contact);
        $notes = htmlspecialchars($request->get('notes'));
        $isActive = $request->get('isActive') != null ? 1 : 0;

        if ($siret != null) {
            $getBySiret = $this->getBy("siret", $siret);
            if ($getBySiret != null) {
                if ($getBySiret[0]->idSupplier != $idSupplier) {
                    $this->helper->session->set_flashdata("error", "Le numéro de SIRET existe déja dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }

            }
        }
        if ($tva != null) {
            $getByTva = $this->getBy("tva", $tva);
            if ($getByTva != null) {
                if ($getByTva[0]->idSupplier != $idSupplier) {
                    $this->helper->session->set_flashdata("error", "Le numéro de TVA existe déja dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            }
        }
        if ($refCode != null) {
            $getByCode = $this->getBy("refCode", $refCode);
            if ($getByCode != null) {
                if ($getByCode[0]->idSupplier != $idSupplier) {
                    $this->helper->session->set_flashdata("error", "Le numéro de référence Fournisseur existe déja dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            }
        }
        if ($societyName != null) {
            $getByName = $this->getBy("societyName", $societyName);
            if ($getByName != null) {
                if ($getByName[0]->idSupplier != $idSupplier) {
                    $this->helper->session->set_flashdata("error", "La société existe déja dans la base de donnée");
                    $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
                }
            }
        }

        $data = array(
            'isSociety' => $isSociety,
            'societyName' => $societyName,
            'gender' => $gender,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'address' => $address,
            'zipCode' => $zipCode,
            'city' => $city,
            'country' => $country,
            'phone' => $phone,
            'mobilePhone' => $mobilePhone,
            'mail' => $mail,
            'refCode' => $refCode,
            'webSite' => $webSite,
            'paymentType' => $paymentType,
            'iban' => $iban,
            'bic' => $bic,
            'tva' => $tva,
            'siret' => $siret,
            'contact' => $contactStr,
            'notes' => $notes,
            'isActive' => $isActive
        );

        if (!$this->helper->db->update($this->table, $data, array('idSupplier' => $idSupplier))) {
            $this->helper->session->set_flashdata("error", "Erreur lors de la modification du fournisseur dans la base de donnée");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
        } else {
            $this->helper->session->set_flashdata("success", "Le fournisseur a bien été modifié");
            $this->helper->url->redirect("wp-admin/admin.php?page=TijaraShop/supplier");
        }

    }
}