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
            border-bottom: 1px solid #000;
            background: #aaa;
            color: #000;
            padding: 4px;
        }
        .Differences tbody th {
            text-align: right;
            background: #ccc;
            width: 4em;
            padding: 1px 2px;
            border-right: 1px solid #000;
            vertical-align: top;
            font-size: 13px;
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
            background: #fe9;
        }

        .DifferencesSideBySide .ChangeReplace .Right {
            background: #fd8;
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
                   <?= $diff ?>

                </div>
            </div>
        </div>
    </div>


    <!--END PAGE-->
</div>
