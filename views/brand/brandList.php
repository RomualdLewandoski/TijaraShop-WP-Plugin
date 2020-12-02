<div class="navbar nav bg-light tijara-nav text-black-50">
	TijaraShop / Liste des marques

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

								Liste des marques

						</li>
					</ul>
				</div>
				<div class="card-body table-responsive">
					<table class="table " id="myTable">
						<thead class="thead-dark">
						<th>Id</th>
						<th>Nom</th>
						<th>Position</th>
						<th>Categorie</th>
						<th>Sous catégorie ?</th>
						<th>Action</th>
						</thead>
						<tbody>
						<?php
						foreach ( $cats as $cat ):
							?>

							<tr>
								<form method="post"
								      action="<?= $pageUrl ?>&action=editCat&catId=<?= $cat->id ?>"
								      id="form<?= $cat->id ?>">
									<td>
										<?= $cat->id ?>
									</td>
									<td>
										<input type="text" class="form-control" name="catName"
										       value="<?= $cat->nom ?>">
									</td>
									<td>
										<input type="number" class="form-control" name="catPosition"
										       value="<?= $cat->position ?>">
									</td>
									<td>
										<select name="parentCat" id="catParent" class="custom-select">
											<option value="">------CHOISIR UN PARENT-----</option>
											<?php foreach ( $listed as $cat2 ) {
												?>
												<option value="<?= $cat2->id ?>" <?php if ($cat->parent == $cat2->id){ echo 'selected="selected"';} ?> ><?= $cat2->nom; ?></option>
												<?php
											}
											?>
										</select>
									</td>
									<td>
										<?= count( $cat->child ) != 0 ? "Oui : " . count( $cat->child ) : "Non" ?>
									</td>
									<td>
										<button type="submit" class="btn btn-warning">Editer</button>
										<a href="<?= $pageUrl ?>&action=deleteCat&catId=<?= $cat->id ?>"
										   class="btn btn-danger">Supprimer</a>
										<?php
										if ( count( $cat->child ) != 0 ) {
											?>
											<a href="<?= $pageUrl ?>&action=listSub&catId=<?= $cat->id ?>"
											   class="btn btn-success">Sous catégories</a>
											<?php
										}
										?>
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
				<div class="card-header">Ajouter une catégorie</div>
				<form method="post" action="<?= $pageUrl ?>&action=addCat">
					<div class="card-body">
						<div class="form-group row">
							<label for="catName" class="col-sm-2 col-form-label">Nom</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="catName" placeholder="Nom"
								       name="catName">
							</div>
						</div>
						<div class="form-group row">
							<label for="catPosition" class="col-sm-2 col-form-label">Position</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="catPosition" placeholder="Position"
								       name="catPosition">
							</div>
						</div>
						<div class="form-group row">
							<label for="parentCat" class="col-sm-2 col-form-label">Parent</label>
							<div class="col-sm-10">
								<select name="parentCat" id="parentCat" class="custom-select">
									<option value="">------CHOISIR UN PARENT-----</option>
									<?php foreach ( $listed as $cat ) {
										?>
										<option value="<?= $cat->id ?>"><?= $cat->nom; ?></option>
										<?php
									}
									?>
								</select>
							</div>
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