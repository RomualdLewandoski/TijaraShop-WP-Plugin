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
            <div class="card card-success col-12">
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
                        foreach ($logList as $log):
                            ?>
                            <tr class="<?php
                            switch ($log->actionLog){
                                case "Create":
                                    echo "bg-success";
                                    break;
                                case "Edit":
                                    echo "bg-warning";
                                    break;
                                case "Delete":
                                    echo "bg-danger";
                                    break;

                                default:
                                    echo "";
                                    break;
                            }
                            ?>">
                                <td><?= $log->idLog ?></td>
                                <td><?= $log->userLog ?></td>
                                <td><?= $log->typeLog ?></td>
                                <td><?= $log->actionLog ?></td>
                                <td><?= $log->dateLog ?></td>
                                <td>
                                    <a href="<?= $pageUrl ?>&action=view&idLog=<?= $log->idLog ?>"
                                       class="btn btn-sm btn-success">Voir</a>
                                    <a href="<?= $pageUrl ?>&action=rollback&idLog=<?= $log->idLog ?>"
                                       class="btn btn-sm btn-warning">Rollback</a>
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
