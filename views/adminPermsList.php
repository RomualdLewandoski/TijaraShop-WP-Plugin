<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Liste des modèles de permission

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
        <div class="col-lg-8">
            <div class="card card-primary col-12">
                <div class="card-header">
                    <ul class="nav">
                        <li class="nav-item">
                            Liste des modèles de permission <?php
                            if ($search != null){
                                echo "avec le nom du modele commencant par <strong>\"".$search."\"</strong> <a href='".$pageUrl."'>Voir toute la liste</a>";
                            }
                            ?>
                        </li>

                        <li class="nav-item ml-auto mr-2">
                            <form action="<?= $pageUrl ?>" method="post">
                                <input type="hidden" name="action" value="search">
                                <div class="input-group input-group-sm mb-2">
                                    <input type="text" class="form-control" name="searchPermsName">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="input-group-text" id="inputGroup-sizing-sm"><i
                                                    class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="card-body table-responsive">
                    <table class="table " id="myTable">
                        <thead class="thead-dark">
                        <th>Nom</th>
                        <th>Admin</th>
                        <th>Compta</th>
                        <th>Produits</th>
                        <th>Fournisseurs</th>
                        <th>Stocks</th>
                        <th>Caisse</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($perms as $perm):
                            ?>

                                <tr>
                                    <form method="post"
                                          action="<?= $pageUrl ?>&action=editPerms&id=<?= $perm->idPermissionModel ?>"
                                          id="form<?= $perm->idPermissionModel ?>">
                                    <td>
                                        <input type="text" class="form-control" name="permsName"
                                               value="<?= $perm->namePermissionModel ?>">
                                    </td>
                                    <td>
                                        <input type="checkbox" data-toggle="toggle"
                                               data-on="Oui"
                                               data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input1<?= $perm->idPermissionModel ?>"
                                               name="permsAdmin" <?php echo $perm->hasAdmin == 1 ? " checked " : ""; ?> >
                                    </td>
                                    <td><input type="checkbox" <?php echo $perm->hasCompta == 1 ? "checked" : ""; ?>
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input2<?= $perm->idPermissionModel ?>"
                                               name="permsCompta">
                                    </td>
                                    <td>
                                        <input type="checkbox" <?php echo $perm->hasProductManagement == 1 ? "checked" : ""; ?>
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input3<?= $perm->idPermissionModel ?>"
                                               name="permsProducts">
                                    </td>
                                    <td>
                                        <input type="checkbox" <?php echo $perm->hasSupplierManagement == 1 ? "checked" : ""; ?>
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input4<?= $perm->idPermissionModel ?>"
                                               name="permsSupplier">
                                    </td>
                                    <td><input type="checkbox" <?php echo $perm->hasStock == 1 ? "checked" : ""; ?>
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input5<?= $perm->idPermissionModel ?>"
                                               name="permsStock">
                                    </td>
                                    <td><input type="checkbox" <?php echo $perm->hasCaisse == 1 ? "checked" : ""; ?>
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input6<?= $perm->idPermissionModel ?>"
                                               name="permsCaisse">
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-warning">Editer</button>
                                        <a href="<?= $pageUrl?>&action=deletePerms&permsId=<?=$perm->idPermissionModel?>" class="btn btn-danger">Supprimer</a>

                                    </td>
                            </form>
                                </tr>

                            <script>
                                $("#form<?=$perm->idPermissionModel?>").submit(function (event) {
                                    if ($('#input1<?= $perm->idPermissionModel ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsAdmin")
                                            .attr("value", "1")
                                            .appendTo("#form<?=$perm->idPermissionModel?>");
                                    }
                                    if ($('#input2<?= $perm->idPermissionModel ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsCompta")
                                            .attr("value", "1")
                                            .appendTo("#form<?=$perm->idPermissionModel?>");
                                    }
                                    if ($('#input3<?= $perm->idPermissionModel ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsProducts")
                                            .attr("value", "1")
                                            .appendTo("#form<?=$perm->idPermissionModel?>");
                                    }
                                    if ($('#input4<?= $perm->idPermissionModel ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsSupplier")
                                            .attr("value", "1")
                                            .appendTo("#form<?=$perm->idPermissionModel?>");
                                    }
                                    if ($('#input5<?= $perm->idPermissionModel ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsStock")
                                            .attr("value", "1")
                                            .appendTo("#form<?=$perm->idPermissionModel?>");
                                    }
                                    if ($('#input6<?= $perm->idPermissionModel ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsCaisse")
                                            .attr("value", "1")
                                            .appendTo("#form<?=$perm->idPermissionModel?>");
                                    }
                                    return true;

                                })
                            </script>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $('#myTable').dataTable( {
                                "searching": false
                            } );
                        });
                    </script>

                </div>
                <div class="card-footer text-center">

                </div>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-warning col-12">
                <div class="card-header">Ajouter un modèle de permission</div>
                <form method="post" action="<?= $pageUrl ?>&action=addPermsModel">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="permsName" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="permsName" placeholder="Nom"
                                       name="permsName">
                            </div>
                        </div>
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
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success">Ajouter le modèle de permission</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>