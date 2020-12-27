<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Ajouter un utilisateur
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
    <form action="<?= $pageUrl?>&action=submitAddUser" method="post" autocomplete="false">
        <div style="overflow: none; height: 0px;background: transparent; color: transparent; z-index: -1000000"
             data-description="dummyPanel for Chrome auto-fill issue">
            <input type="text" style="height:0;background: transparent; color: transparent;border: none; display: none"
                   data-description="dummyUsername">
            <input type="password" style="height:0;background: transparent; color: transparent;border: none; width: 0px"
                   data-description="dummyPassword">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card col-12 card-primary">
                    <div class="card-header">
                        Identitée
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput"><h5>Nom d'utilisateur</h5></label>
                            <input type="text" class="form-control" id="formGroupExampleInput" name="addUserName"
                                   placeholder="nom d'utilisateur" autocomplete="nofill">
                        </div>
                    </div>
                </div>
                <div class="card col-12">
                    <div class="card-header">
                        Mot de passe
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">Information</h4>
                            <hr>
                            <p class="mb-0">
                                La définition d'un mot de passe utilisateur est facultative. Un mot de passe aléatoire
                                serra généré et les
                                utilisateurs seront invités à créer un mot de passe lors de leur première
                                connexion. Si un mot de passe est fourni ici, l'utilisateur ne poura pas le changer à la
                                première connexion.
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput"><h5>Mot de passe</h5></label>
                            <input type="password" class="form-control" id="formGroupExampleInput"
                                   placeholder="Mot de passe (facultatif)" name="addUserPass">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card col-12">
                    <div class="card-header">
                        Permissions
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><h5>Modèle de permission</h5>
                            </label><br>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"
                                    name="addModelPerms">
                                <option value="0" selected>Custom</option>
                                <?php
                                foreach ($permsList as $perm) {
                                    ?>
                                    <option value="<?= $perm->idPermissionModel ?>"><?= $perm->namePermissionModel ?></option>

                                    <?php
                                }
                                ?>

                            </select><br>
                            <small><i>Choisir une valeur autre que custom ferra que les champs en dessous ne serront pas
                                    pris en compte</i></small>
                        </div>

                        <hr>
                        <div class="form-group">
                            <label class="form-check-label col-sm-4 col-form-label" for="defaultCheck1">
                                Accès Admin
                            </label>
                            <input class="form-check-input" type="checkbox" data-toggle="toggle" data-on="Oui"
                                   data-off="Non"
                                   data-onstyle="success" data-offstyle="danger" id="defaultCheck1" name="permsAdmin">

                        </div>
                        <div class="form-group">
                            <label class="form-check-label col-sm-4 col-form-label" for="defaultCheck1">
                                Accès Compta
                            </label>
                            <input class="form-check-input" type="checkbox" data-toggle="toggle" data-on="Oui"
                                   data-off="Non"
                                   data-onstyle="success" data-offstyle="danger" id="defaultCheck1" name="permsCompta">

                        </div>
                        <div class="form-group">
                            <label class="form-check-label col-sm-4 col-form-label" for="defaultCheck1">
                                Gestion Produits
                            </label>
                            <input class="form-check-input" type="checkbox" data-toggle="toggle" data-on="Oui"
                                   data-off="Non"
                                   data-onstyle="success" data-offstyle="danger" id="defaultCheck1"
                                   name="permsProducts">

                        </div>
                        <div class="form-group">
                            <label class="form-check-label col-sm-4 col-form-label" for="defaultCheck1">
                                Gestion fournisseurs
                            </label>
                            <input class="form-check-input" type="checkbox" data-toggle="toggle" data-on="Oui"
                                   data-off="Non"
                                   data-onstyle="success" data-offstyle="danger" id="defaultCheck1"
                                   name="permsSupplier">

                        </div>
                        <div class="form-group">
                            <label class="form-check-label col-sm-4 col-form-label" for="defaultCheck1">
                                Gestion stocks
                            </label>
                            <input class="form-check-input" type="checkbox" data-toggle="toggle" data-on="Oui"
                                   data-off="Non"
                                   data-onstyle="success" data-offstyle="danger" id="defaultCheck1" name="permsStock">

                        </div>
                        <div class="form-group">
                            <label class="form-check-label col-sm-4 col-form-label" for="defaultCheck1">
                                Accès caisse
                            </label>
                            <input class="form-check-input" type="checkbox" data-toggle="toggle" data-on="Oui"
                                   data-off="Non"
                                   data-onstyle="success" data-offstyle="danger" id="defaultCheck1" name="permsCaisse">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card col-12 card-success">
            <div class="card-header">
                Actions
            </div>
            <div class="card-body text-center">
                <button type="submit" class="btn btn-success">Ajouter</button>
                <a href="<?= $pageUrl ?>" class="btn btn-danger">Annuler</a>
            </div>
        </div>
    </form>

