<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Liste des Fournisseurs
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