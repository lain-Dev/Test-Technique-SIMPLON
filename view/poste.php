<?php require_once(dirname(__DIR__).'/view/head.php');?>

<?php if ($_SESSION['user'] == true) { ?>

<div class="global-container row row-cols-lg-2 row-cols-1">
	<div class="card login-form mt-5">
		<div class="card-body" style="background-color: #e9ecef;">
			<h3 class="card-title text-center">Ajouter Poste !</h3>
			<div class="card-text">
				<!--
				<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
				<form action="" method="POST" id="poste">
					<!-- to error: add class "has-danger" -->
					<div class="form-group">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<label for="num_poste">Numéro du poste</label>
						<input type="text" class="form-control form-control-sm" id="num_poste" name="num_poste" required placeholder="Entrez le numéro du poste" value="<?php if(isset($_POST['num_poste'])){echo htmlspecialchars($_POST['marque'], ENT_QUOTES);}?>">
					</div>

					<button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
				</form>
			</div>
		</div>
	</div>

	<table class="table table-striped p-1 col-7">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Numéro Poste</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">exemple ID</th>
				<td>poste 12</td>
			</tr>
		</tbody>
	</table>
</div>

<?php } ?>

<?php require_once(dirname(__DIR__).'/view/footer.php');?>