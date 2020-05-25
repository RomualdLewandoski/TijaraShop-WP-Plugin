<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Voir le Log
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
                            Lecture du log
                        </li>
                    </ul>
                </div>
                <div class="card-body table-responsive">
                   <?= $diff ?>

                </div>
            </div>
        </div>
    </div>


    <!--END PAGE-->
</div>
