<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Liste des boutiques

</div>
<div class="container-fluid mt-3">
	<?php
	if ( $error != null ) {
		?>
        <div class="alert alert-danger mt-3" role="alert">
			<?= $error ?>
        </div>
		<?php
	}
	if ( $success != null ) {
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

                            Liste des boutiques

                        </li>
                    </ul>
                </div>
                <div class="card-body table-responsive">
                    <table class="table " id="myTable">
                        <thead class="thead-dark">
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Stock Principal</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
						<?php
						foreach ( $boutiques as $brand ):
							?>

                            <tr>
                                <form method="post"
                                      action="<?= $pageUrl ?>&action=editBoutique&boutiqueId=<?= $brand->id ?>"
                                      id="form<?= $brand->id ?>">
                                    <td>
										<?= $brand->id ?>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="boutiqueName"
                                               value="<?= $brand->nom ?>">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="boutiqueDefault"
                                               value="<?= $brand->position ?>">
                                    </td>

                                    <td>
                                        <button type="submit" class="btn btn-warning">Editer</button>
                                        <a href="<?= $pageUrl ?>&action=deleteBoutique&brandId=<?= $brand->id ?>"
                                           class="btn btn-danger">Supprimer</a>
                                    </td>
                                </form>
                            </tr>


						<?php
						endforeach;
						?>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $('#myTable').dataTable({
                                "searching": false
                            });
                        });
                    </script>

                </div>
                <div class="card-footer text-center">

                </div>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-warning col-12">
                <div class="card-header">Ajouter une boutique</div>
                <form method="post" action="<?= $pageUrl ?>&action=addBoutique">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="boutiqueName" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="boutiqueName" placeholder="Nom"
                                       name="boutiqueName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="boutiqueDefault" class="col-sm-2 col-form-label">Stock principal</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="boutiqueDefault" placeholder="Est ce le stock par defaut pour le retrait web ?"
                                       name="boutiqueDefault">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success">Ajouter la boutique</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>