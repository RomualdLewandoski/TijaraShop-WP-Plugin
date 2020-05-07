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
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Société</label>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-3 col-form-label">Raison Sociale</label>
                <div class="col-md-9">
                    <input type="text" class="form-control bg-white" id="staticEmail">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <a href="#" class="inner-link" id="supplierAddMore"> <i class="fas fa-eye"></i> Plus d'informations</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
    </div>

<!--END PAGE -->
</div>