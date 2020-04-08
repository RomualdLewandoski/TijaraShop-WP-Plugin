<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Panneau de Configuration
</div>
<div class="container-fluid ">
    <div class="alert alert-warning mt-3" role="alert">
        <b>Attention ! </b>Le plugin n'est pas configuré les caisses ne pourront pas fonctionner <a href="#"
                                                                                                    class="alert-link">Procéder
            à la configuration</a>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Configuration de l'Api</div>
                <div class="card-body">
                    Configurer les clé d'accès à l'API ne devrait pas etre modifié
                    <b>SAUF PROBLEME DE SECURITE</b>
                    <br><br>
                    Etat des clé api: <span class="text-success">Générée</span>
                    <span class="text-danger">Non générée</span>

                </div>
                <div class="card-footer text-center">
                    <a href="admin.php?page=TijaraShop/api" class="btn btn-primary">
                        Allez à la configuration de l'api
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Gestion des comptes Utilisateurs</div>
                <div class="card-body">
                    Configurer les comptes utilisateur de l'application TijaraShop
                    <b>Attention : ces comptes ne sont aucunement lié au site</b> ils ne pourront pas
                    se connecter ici
                </div>
                <div class="card-footer text-center">
                    <a href="Go" class="btn btn-primary">
                        Allez à la configuration des utilisateurs
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Modèle de permission</div>
                <div class="card-body">Confiurer les modèles de permission par defaut
                    <b>Cela permet de créer des utilisateurs plus rapidement</b> mais cette étape n'est pas
                    obligatoire,
                    chaque utilisateur reste modifiable
                </div>
                <div class="card-footer text-center">
                    <a href="Go" class="btn btn-primary">
                        Allez à la configuration des modèles
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">Logs de connexion</div>
                <div class="card-body">Consultez ici les logs de connexions
                    <br><b>Ne liste que les actions enregistré sur le site</b> si une information n'apparait pas
                    essayez de mettre a jour la caisse (bouton en haut mise a jour)
                </div>
                <div class="card-footer text-center">
                    <a href="Go" class="btn btn-primary">
                        Consulter les logs de connexion
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>