<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Configuration de l'API
</div>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card col-12">
                <div class="card-header">Configuration de l'API</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="colFormLabelLg"
                               class="col-sm-2 col-form-label col-form-label-lg">Clé Api</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                                   placeholder="apiKey goes here">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card col-12">
                <div class="card-header">Script de configuration caisse</div>
                <div class="card-body">
                    Vous devrez copier coller ce script lors de l'installation de la caisse
                    <pre><?= $json;?></pre>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary" onclick="">Copier la configuration</button>
                </div>
            </div>
        </div>
    </div>
</div>