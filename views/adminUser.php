<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Liste des Utilisateurs
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
                <div class="card-header">
                    <ul class="nav">
                        <li class="nav-item">
                            Liste des utilisateurs <?php
                            if ($search != null){
                                echo "avec le nom d'utilisateur commencant par <strong>\"".$search."\"</strong> <a href='".$pageUrl."'>Voir toutela liste</a>";
                            }
                            ?>
                        </li>

                        <li class="nav-item ml-auto mr-2">
                            <form action="<?= $pageUrl ?>" method="post">
                                <input type="hidden" name="action" value="search">
                                <div class="input-group input-group-sm mb-2">
                                    <input type="text" class="form-control" name="searchUserName">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="input-group-text" id="inputGroup-sizing-sm"><i
                                                    class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $pageUrl ?>&action=addUser" class="btn btn-sm btn-success">Ajouter un
                                utilisateur</a>

                        </li>
                    </ul>
                </div>
                <div class="card-body table-responsive">
                    <table class="table " id="myTable">
                        <thead class="thead-dark">
                        <th>Nom d'utilisateur</th>
                        <th>Mot de passe</th>
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
                        foreach ($userList as $user):
                            ?>
                            <form method="post"
                                  action="<?= $pageUrl ?>&action=editUser&id=<?= $user->idShopLogin ?>"
                                  id="form<?= $user->idShopLogin ?>">
                                <tr>
                                    <td><input type="text" class="form-control-sm" name="userName"
                                               value="<?= $user->usernameShopLogin ?>"></td>
                                    <td>
                                        <?php
                                        if ($user->isDefaultPass == 1) {
                                            echo $user->passwordShopLogin;
                                        } else {
                                            echo "**********";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <input type="checkbox" data-toggle="toggle"
                                               data-on="Oui"
                                               data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input1<?= $user->idShopLogin ?>"
                                               name="permsAdmin" <?php echo $user->hasAdmin == 1 ? " checked " : ""; ?>>
                                    </td>
                                    <td><input type="checkbox"
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input2<?= $user->idShopLogin ?>"
                                               name="permsCompta" <?php echo $user->hasCompta == 1 ? " checked " : ""; ?>>
                                    </td>
                                    <td>
                                        <input type="checkbox"
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input3<?= $user->idShopLogin ?>"
                                               name="permsProducts" <?php echo $user->hasProductManagement == 1 ? " checked " : ""; ?>>
                                    </td>
                                    <td>
                                        <input type="checkbox"
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input4<?= $user->idShopLogin ?>"
                                               name="permsSupplier" <?php echo $user->hasSupplierManagement == 1 ? " checked " : ""; ?>>
                                    </td>
                                    <td><input type="checkbox"
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input5<?= $user->idShopLogin ?>"
                                               name="permsStock" <?php echo $user->hasStock == 1 ? " checked " : ""; ?>>
                                    </td>
                                    <td><input type="checkbox"
                                               data-toggle="toggle" data-on="Oui" data-off="Non"
                                               data-onstyle="success" data-offstyle="danger" data-size="sm"
                                               id="input6<?= $user->idShopLogin ?>"
                                               name="permsCaisse" <?php echo $user->hasCaisse == 1 ? " checked " : ""; ?>>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-success">Editer</button>
                                        <a href="<?= $pageUrl ?>&action=editPassword&userId=<?= $user->idShopLogin ?>"
                                           class="btn btn-warning">Mot de passe</a>
                                        <a href="<?= $pageUrl ?>&action=deleteUser&userId=<?= $user->idShopLogin ?>"
                                           class="btn btn-danger">Supprimer</a>

                                    </td>
                                </tr>
                            </form>
                            <script>
                                $("#form<?= $user->idShopLogin ?>").submit(function (event) {
                                    if ($('#input1<?= $user->idShopLogin ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsAdmin")
                                            .attr("value", "1")
                                            .appendTo("#form<?= $user->idShopLogin ?>");
                                    }
                                    if ($('#input2<?= $user->idShopLogin ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsCompta")
                                            .attr("value", "1")
                                            .appendTo("#form<?= $user->idShopLogin ?>");
                                    }
                                    if ($('#input3<?= $user->idShopLogin ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsProducts")
                                            .attr("value", "1")
                                            .appendTo("#form<?= $user->idShopLogin ?>");
                                    }
                                    if ($('#input4<?= $user->idShopLogin ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsSupplier")
                                            .attr("value", "1")
                                            .appendTo("#form<?= $user->idShopLogin ?>");
                                    }
                                    if ($('#input5<?= $user->idShopLogin ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsStock")
                                            .attr("value", "1")
                                            .appendTo("#form<?= $user->idShopLogin ?>");
                                    }
                                    if ($('#input6<?= $user->idShopLogin ?>').prop('checked')){
                                        $("<input />").attr("type", "hidden")
                                            .attr("name", "permsCaisse")
                                            .attr("value", "1")
                                            .appendTo("#form<?= $user->idShopLogin ?>");
                                    }
                                    return true;

                                })
                            </script>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>