<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Panneau de Configuration
</div>
<div class="container-fluid mt-3">
    <?php
    if ($error != null){
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
</div>
<div class="container mt-2">
    <div class="card col-12 card-success">
        <div class="card-header">
            Installation de TijaraShop
        </div>
        <div class="card-body">
            <div class="progress mb-2">
                <div class="progress-bar bg-success" role="progressbar" id="bar" style="width: 0%" aria-valuenow="25"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            <form method="post" action="<?= $pageUrl;?>&action=install">
                <div style="height: 0px;background: transparent; color: transparent; z-index: -1000000"
                     data-description="dummyPanel for Chrome auto-fill issue">
                    <input type="text"
                           style="height:0;background: transparent; color: transparent;border: none; display: none"
                           data-description="dummyUsername">
                    <input type="password"
                           style="height:0;background: transparent; color: transparent;border: none; width: 0px"
                           data-description="dummyPassword">
                </div>
                <div id="step1">
                    <h2>Etape 1 : Configuration de l'api</h2>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Url du site</label>
                        <div class="col-sm-10">
                            <input type="url" class="form-control" id="siteUrl" name="siteUrl"
                                   placeholder="https://google.com" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Methode d'install</label>
                        <div class="col-sm-10">
                            <select class="custom-select col-12" id="installMethod" name="methodInstall" required>
                                <option value="nope">--- Choisir une methode d'installation ---</option>
                                <option value="install">Installation</option>
                                <option value="update">Mise a jour</option>
                            </select>
                            <button type="button" class="btn btn-sm btn-circle-left btn-secondary" data-toggle="tooltip"
                                    data-placement="top" data-html="true" title="
                            <b>Installation</b> : Supprime la base de la caisse si elle existe et cré les nouveaux paramètres<br>
                            <b>Mise a jour</b> : Créer les nouveaux paramètres sans toucher à la base de donnée de la caisse (utile pour changement de nom de domaines)
">
                                ?
                            </button>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Clé API</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apiKey" name="apiKey"
                                   placeholder="Laissez vide pour auto générer la clé (recommandé)">
                        </div>
                    </div>

                </div>
                <div id="step2" style="display: none">
                    <h2>Etape 2 : Création du compte administrateur</h2>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nom du compte </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="adminName" name="adminName"
                                   placeholder="admin" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mot de passe </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="adminPassword" name="adminPassword"
                                   placeholder="Mot de passe" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Confirmation </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="adminPasswordConf" name="adminPasswordConf"
                                   placeholder="Confirmation du mot de passe" required>
                        </div>
                    </div>
                </div>
                <div id="step3" style="display: none">
                    <h2>Etape 3 : Récapitulatif</h2>
                    <table class="table mt-3">
                        <tbody>
                        <tr>
                            <th scope="row">Url du site</th>
                            <td id="infoSiteUrl"></td>
                        </tr>
                        <tr>
                            <th scope="row">Méthode</th>
                            <td id="infoMethod"></td>
                        </tr>
                        <tr>
                            <th scope="row">Clé api</th>
                            <td id="infoApiKey"></td>
                        </tr>
                        <tr>
                            <th scope="row">Compte admin</th>
                            <td id="infoAdmin"></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Les informations sont correctes</button>
                    </div>

                </div>
            </form>


        </div>
        <div class="card-footer text-center">
            <button type="button" id="prev" class="btn btn-sm btn-danger btn-circle-left mr-5" style="display: none"><i
                        class="fas fa-caret-left"></i></button>
            <button type="button" id="next" class="btn btn-sm btn-success btn-circle ml-5"><i
                        class="fas fa-caret-right"></i></button>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    var bar = $('#bar');
    var step = 0;
    var step1 = $('#step1');
    var step2 = $('#step2');
    var step3 = $('#step3');
    var prev = $('#prev');
    var next = $('#next');

    next.click(function (event) {
        event.preventDefault();
        if (step == 0) {
            prev.show()
            step = step + 1;
            step1.fadeOut("300");
            setTimeout(function () {
                step2.fadeIn(300)
            }, 400);

            bar.css("width", "50%")
        } else if (step == 1) {
            step = step + 1;
            step2.fadeOut("300");
            setTimeout(function () {
                step3.fadeIn(300)
            }, 400);
            bar.css("width", "100%");
            next.hide();
            $('#infoSiteUrl').text($('#siteUrl').val());
            $('#infoMethod').text($('#installMethod').val());
            if ($('#apiKey').val() != ""){
                $('#infoApiKey').text($('#apiKey').val())
            }else{
                $('#infoApiKey').text("Auto")
            }
            $('#infoAdmin').text($('#adminName').val())
        }

    })
    prev.click(function (event) {
        event.preventDefault();
        if (step == 2) {
            next.show();
            bar.css("width", "50%")
            step3.fadeOut("300");
            setTimeout(function () {
                step2.fadeIn(300)
            }, 400);
        }
        if (step == 1) {
            prev.hide()
            step2.fadeOut("300");
            setTimeout(function () {
                step1.fadeIn(300)
            }, 400);
            bar.css("width", "0%")
        }
        step = step - 1;

    })
</script>