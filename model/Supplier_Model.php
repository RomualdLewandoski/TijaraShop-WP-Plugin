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

    public function addSupplier($request)
    {
        $isSociety = $request->get('isSociety') != null ? 1 : 0;
        $societyName = htmlspecialchars($request->get('societyName'));
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
            if ($this->getBy("siret", $siret) != null) {
                //todo already exist
            }
        }
        if ($tva != null) {
            if ($this->getBy("tva", $tva) != null) {
                //todo already exist
            }
        }
        if ($refCode != null) {
            if ($this->getBy("refCode", $refCode) != null) {
                //todo already exist
            }
        }
        if ($societyName != null) {
            if ($this->getBy("societyName", $societyName) != null) {
                //todo already exist
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
            //todo err
        } else {
            //todo success
        }

    }

    public function getBy($row, $value)
    {
        return $this->helper->db->get_where($this->table, array($row => $value));
    }
}