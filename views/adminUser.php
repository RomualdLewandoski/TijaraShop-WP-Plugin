<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Configuration de l'API
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
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary col-12">
                <div class="card-header">Liste des Utilisateur</div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>