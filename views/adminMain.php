<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Panneau de Configuration
</div>

<div class="container-fluid ">
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
        <div class="col-lg-3">
            <div class="card card-warning">
                <div class="card-header">Configuration de l'Api</div>
                <div class="card-body">
                    Configurer les clé d'accès à l'API ne devrait pas etre modifié
                    <b>SAUF PROBLEME DE SECURITE</b>
                    <br><br>Etat des clé api:
                    <?php
                    if ($apiKey == null){
                        ?>
                        <span class="text-danger">Non générée</span>

                        <?php
                    }else{
                        ?>
                        <span class="text-success">Générée</span>

                        <?php
                    }
                    ?>

                </div>
                <div class="card-footer text-center">
                    <a href="admin.php?page=TijaraShop/api" class="btn btn-primary">
                        Allez à la configuration de l'api
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card card-success">
                <div class="card-header">Gestion des comptes Utilisateurs</div>
                <div class="card-body">
                    Configurer les comptes utilisateur de l'application TijaraShop
                    <b>Attention : ces comptes ne sont aucunement lié au site</b> ils ne pourront pas
                    se connecter ici
                </div>
                <div class="card-footer text-center">
                    <a href="admin.php?page=TijaraShop/users" class="btn btn-primary">
                        Allez à la configuration des utilisateurs
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card card-primary">
                <div class="card-header">Modèle de permission</div>
                <div class="card-body">Confiurer les modèles de permission par defaut
                    <b>Cela permet de créer des utilisateurs plus rapidement</b> mais cette étape n'est pas
                    obligatoire,
                    chaque utilisateur reste modifiable
                </div>
                <div class="card-footer text-center">
                    <a href="admin.php?page=TijaraShop/perms" class="btn btn-primary">
                        Allez à la configuration des modèles
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card card-danger">
                <div class="card-header">Logs</div>
                <div class="card-body">Consultez ici les logs
                    <br><b>Ne liste que les actions enregistré sur le site</b> si une information n'apparait pas
                    essayez de mettre a jour la caisse (bouton en haut mise a jour)
                </div>
                <div class="card-footer text-center">
                    <a href="admin.php?page=TijaraShop/logs" class="btn btn-primary">
                        Consulter les logs de connexion
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>