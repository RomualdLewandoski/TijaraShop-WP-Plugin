<?php


class Supplier_Model extends Model
{
    public function __construct()
    {

    }

    public function addSupplier($request)
    {
        $isSociety = $request->get('isSociety') != null ? 1 : 0;
        $societyName = htmlspecialchars($request->get('societyName'));
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
            //todo make a simple check to be sure that we don't aleready have ths siret name on our database
            //with a return HERE IF SIRET EXIST
        }
        if ($tva != null) {
            //todo same as siret
        }
        if ($refCode != null) {
            //todo same as siret & tva
        }
        if ($societyName != null) {
            //todo same as above
        }
        
    }
}