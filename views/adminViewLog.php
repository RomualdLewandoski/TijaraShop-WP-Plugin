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
    <style>
        .Differences {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            empty-cells: show;
        }

        .Differences thead th {
            text-align: left;
            padding: 4px;
        }
        .Differences tbody th {
            text-align: right;
            width: 4em;
            padding: 1px 2px;
            border-right: 8px solid rgba(0,0,0,0);
            vertical-align: top;
            font-size: 13px;
            color: #2e92af;
        }

        .Differences td {
            padding: 1px 2px;
            font-family: Consolas, monospace;
            font-size: 13px;
        }

        .DifferencesSideBySide .ChangeInsert td.Left {
            background: #dfd;
        }

        .DifferencesSideBySide .ChangeInsert td.Right {
            background: #cfc;
        }

        .DifferencesSideBySide .ChangeDelete td.Left {
            background: #f88;
        }

        .DifferencesSideBySide .ChangeDelete td.Right {
            background: #faa;
        }

        .DifferencesSideBySide .ChangeReplace .Left {
            background: #faa;
        }

        .DifferencesSideBySide .ChangeReplace .Right {
            background: #cfc;
        }

        .Differences ins, .Differences del {
            text-decoration: none;
        }

        .DifferencesSideBySide .ChangeReplace ins, .DifferencesSideBySide .ChangeReplace del {
            background: #fc0;
        }

        .Differences .Skipped {
            background: #f7f7f7;
        }

        .DifferencesInline .ChangeReplace .Left,
        .DifferencesInline .ChangeDelete .Left {
            background: #fdd;
        }

        .DifferencesInline .ChangeReplace .Right,
        .DifferencesInline .ChangeInsert .Right {
            background: #dfd;
        }

        .DifferencesInline .ChangeReplace ins {
            background: #9e9;
        }

        .DifferencesInline .ChangeReplace del {
            background: #e99;
        }

        pre {
            width: 100%;
            overflow: auto;
        }
    </style>

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
                    <strong>Auteur : </strong><?= $log->userLog ?><br>
                    <strong>Date : </strong><?= $log->date ?><br>
                    <strong>Type : </strong><?= $log->typeLog ?>
                    <strong>Action : </strong><?= $log->actionLog ?>
                    <hr>
                   <?= $diff ?>

                </div>
            </div>
        </div>
    </div>


    <!--END PAGE-->
</div>
