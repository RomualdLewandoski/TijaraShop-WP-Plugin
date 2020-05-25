<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Liste des Logs
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
                            Liste des Logs
                        </li>
                    </ul>
                </div>
                <div class="card-body table-responsive">
                    <table class="table " id="myTable">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Utilisateur</th>
                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                            <th scope="col">Date</th>
                            <th scope="col">Gestion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($listSupplier as $supplier):
                            ?>
                            <tr>
                                <td><?= $supplier->idSupplier ?></td>
                                <td><?= $supplier->societyName ?></td>
                                <td><?= $supplier->lastName ?></td>
                                <td><?= $supplier->firstName ?></td>
                                <td><?= $supplier->phone ?> / <?= $supplier->mobilePhone ?></td>
                                <td><?= $supplier->address ?> <?= $supplier->zipCode ?>  <?= $supplier->city ?></td>
                                <td>
                                    <a href="<?= $pageUrl ?>&action=view&idSupplier=<?= $supplier->idSupplier ?>"
                                       class="btn btn-sm btn-success">Voir</a>
                                    <a href="<?= $pageUrl ?>&action=editSupplier&idSupplier=<?= $supplier->idSupplier ?>"
                                       class="btn btn-sm btn-warning">Editer</a>
                                    <a href="<?= $pageUrl ?>&action=delete&idSupplier=<?= $supplier->idSupplier ?>"
                                       class="btn btn-sm btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $('#myTable').dataTable({});
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
    <!--END PAGE-->
</div>
