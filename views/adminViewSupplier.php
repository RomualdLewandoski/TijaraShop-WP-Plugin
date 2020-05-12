<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Ajouter un Fournisseur
</div>
<div class="container-fluid mt-3">
    <?php
    if ($error != null) {
        ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?= $error ?>
        </div>
        <?php
    }
    if ($success != null) {
        ?>
        <div class="alert alert-success mt-3" role="alert">
            <?= $success ?>
        </div>
        <?php
    }
    ?>

    <div class="row text-black bg-lightblue px-2 align-items-center">
        <div class="col-md-1 text-right">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="isSociety"
                       name="isSociety" <?php if ($supplier->isSociety == 1) {
                    echo "checked";
                } ?>>
                <label class="form-check-label" for="isSociety">Société</label>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="form-group row aic">
                <label for="staticEmail" class="col-sm-3 col-form-label">Raison Sociale</label>
                <div class="col-md-9">
                    <strong><?= $supplier->societyName ?></strong>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <a href="#" class="inner-link" id="supplierAddMore"> <i class="fas fa-eye"></i> Plus d'informations</a>
        </div>
    </div>
    <div id="supplierAdd1">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card card-success col-12">
                    <div class="card-header">
                        <div class="row mb-1 aic">
                            <div class="col-md-2">
                                <strong><?= $supplier->gender ?></strong>
                            </div>
                            <div class="col-md-5">
                                <strong><?= $supplier->firstName ?></strong>
                            </div>
                            <div class="col-md-5">
                                <strong><?= $supplier->lastName ?></strong>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                Civilité
                            </div>
                            <div class="col-md-5">
                                Prénom
                            </div>
                            <div class="col-md-5">
                                Nom
                            </div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-2">
                                Adresse
                            </div>
                            <div class="col-md-10">
                                <strong><?= $supplier->address ?></strong>
                            </div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-2">CP / Ville</div>
                            <div class="col-md-3">
                                <strong><?= $supplier->zipCode ?></strong>
                            </div>
                            <div class="col-md-7">
                                <strong><?= $supplier->city ?></strong>
                            </div>
                        </div>
                        <div class="row aic">
                            <div class="col-md-2">
                                Pays
                            </div>
                            <div class="col-md-10">
                                <strong><?= $supplier->country ?></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-warning col-12 mt-2">
                    <div class="card-header">
                        <div class="row mb-1 aic">
                            <div class="col-md-2">Code Ref.</div>
                            <div class="col-md-10">
                                <strong><?= $supplier->refCode ?></strong>
                            </div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-2">Site Web</div>
                            <div class="col-md-10">
                                <strong><?= $supplier->webSite ?></strong>
                            </div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-1 offset-10 text-right mb-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="isActive" name="isActive"
                                        <?php if ($supplier->isActive == 1) {
                                            echo "checked";
                                        } ?>>
                                    <label class="form-check-label" for="isActive">Actif</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END 1st col -->
            </div>

            <div class="col-md-6">
                <div class="card card-primary col-12">
                    <div class="card-header">
                        <div class="row mb-1 aic">
                            <div class="col-md-3">Téléphone</div>
                            <div class="col-md-9">
                                <strong><?= $supplier->phone ?></strong>
                            </div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-3">Mobile</div>
                            <div class="col-md-9">
                                <strong><?= $supplier->mobilePhone ?></strong>
                            </div>
                        </div>
                        <div class="row aic">
                            <div class="col-md-3">Mail</div>
                            <div class="col-md-9">
                                <strong><?= $supplier->mail ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-danger mt-1 col-12">
                    <div class="card-header">
                        Dernière commande le **
                        <div class="row mt-4 mb-1 aic">
                            <div class="col-md-5">Commande en cours</div>
                            <div class="col-md-5"><input type="text" disabled class="form-control"></div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-5">
                                BL à facturer
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-5">
                                Factures à régler
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-5">
                                Avoirs
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row mb-1 aic">
                            <div class="col-md-5">
                                <strong>Solde théorique</strong>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END 2nd col -->
            </div>
        </div>
        <!-- END supplierAdd1 -->
    </div>
    <div id="supplierAdd2" style="display: none">
        <div class="row mt-3 mb-2">
            <div class="col-md-6">
                <div class="card col-12 card-info mb-2">
                    <div class="card-header">
                        <h5 class="card-title-info mb-2">Règlement</h5>
                        <div class="col-9 offset-3">
                            <div class="row aic">
                                <div class="col-md-5">Mode de règlement</div>
                                <div class="col-md-7">
                                    <?php
                                    if ($supplier->paymentType == 0) {
                                        echo "<strong>Tous</strong>";
                                    } else if ($supplier->paymentType == 1) {
                                        echo "<strong>Virement</strong>";
                                    } else if ($supplier->paymentType == 2) {
                                        echo "<strong>Espèces</strong>";
                                    } else if ($supplier->paymentType == 3) {
                                        echo "<strong>CB</strong>";
                                    } else if ($supplier->paymentType == 4) {
                                        echo "<strong>Autre</strong>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col-12 card-success mb-2">
                    <div class="card-header">
                        <h5 class="card-title-info mb-2">Coordonnées bancaires</h5>
                        <div class="row mb-2 aic">
                            <div class="col-md-2">IBAN</div>
                            <div class="col-md-10">
                                <strong><?= $supplier->iban ?></strong>

                            </div>
                        </div>
                        <div class="row aic">
                            <div class="col-md-2">BIC</div>
                            <div class="col-md-10">
                                <strong><?= $supplier->bic ?></strong>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- END 3rd col -->
            </div>
            <div class="col-md-6">
                <div class="card card-warning mb-2">
                    <div class="card-header">
                        <h5 class="card-title-info mb-2"> Identification</h5>
                        <div class="row">
                            <div class="col-md-7 offset-5">
                                <div class="row aic mb-2">
                                    <div class="col-md-4">N° TVA</div>
                                    <div class="col-md-8">
                                        <strong><?= $supplier->tva ?></strong>
                                    </div>
                                </div>
                                <div class="row aic mb-2">
                                    <div class="col-md-4">N° SIRET</div>
                                    <div class="col-md-8">
                                        <strong><?= $supplier->siret ?></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END 4th col -->
            </div>
            <div class="col-md-12">
                <div class="card card-danger col-12">
                    <div class="card-header">
                        <div class="row text-center mb-2">
                            <div class="col-md-2 "></div>
                            <div class="col-md-3 "><h6 class="card-title-info">Nom / Prénom</h6></div>
                            <div class="col-md-5 "><h6 class="card-title-info">Mail</h6></div>
                            <div class="col-md-2 "><h6 class="card-title-info">Tel</h6></div>
                        </div>
                        <?php
                        $contact = json_decode($supplier->contact);
                        ?>
                        <div class="row aic mb-2">
                            <div class="col-md-2">Direction</div>
                            <div class="col-md-3">
                                <strong><?= $contact->directionName ?></strong>

                            </div>
                            <div class="col-md-5">
                                <strong><?= $contact->directionMail ?></strong>
                            </div>
                            <div class="col-md-2"><strong><?= $contact->directionPhon ?></strong>
                            </div>
                        </div>
                        <div class="row aic mb-2">
                            <div class="col-md-2">Comptabilité</div>
                            <div class="col-md-3">
                                <strong><?= $contact->comptaName ?></strong>
                            </div>
                            <div class="col-md-5">
                                <strong><?= $contact->comptaMail ?></strong>
                            </div>
                            <div class="col-md-2">
                                <strong><?= $contact->comptaPhone ?></strong>
                            </div>
                        </div>
                        <div class="row aic mb-4">
                            <div class="col-md-2">Commercial</div>
                            <div class="col-md-3">
                                <strong><?= $contact->comName ?></strong>
                            </div>
                            <div class="col-md-5">
                                <strong><?= $contact->comMail ?></strong>
                            </div>
                            <div class="col-md-2">
                                <strong><?= $contact->comPhone ?></strong>
                            </div>
                        </div>
                        <textarea placeholder="Note" class="form-control" id="notes" name="notes" disabled><?= $supplier->notes ?> </textarea>
                    </div>
                </div>
            </div>
        </div>

        <!--END supplierAdd2-->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card col-12 card-success text-center">
                <div class="card-header text-center">
                    <button type="submit" id="addSupplierAction" class="btn btn-success">Ajouter le fournisseur
                    </button>
                    <a href="admin.php?page=TijaraShop%2Fsupplier" class="btn btn-danger">Retour à la liste des
                        fournisseurs</a>
                </div>

            </div>
        </div>
    </div>

    <!--END CONTAINER-->
</div>

<script>
    var configChoosenSupplierAdd = {
        '.chosen-select': {},
        '.chosen-select-deselect': {allow_single_deselect: true},
        '.chosen-select-no-single': {disable_search_threshold: 10},
        '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
        '.chosen-select-rtl': {rtl: true},
        '.chosen-select-width': {width: '95%'}
    }
    for (var selector in configChoosenSupplierAdd) {
        $(selector).chosen(configChoosenSupplierAdd[selector]);
    }
    $('#supplierAddMore').click(function (event) {
        event.preventDefault()
        let pane1 = $('#supplierAdd1')
        let pane2 = $('#supplierAdd2')
        pane1.toggle()
        pane2.toggle()
    })
</script>
<!--END PAGE -->
