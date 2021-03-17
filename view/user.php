<?php 
require_once(dirname(__DIR__).'/view/head.php');
require_once(dirname(__DIR__).'/controller/formUser.php');
ajouterUser();
?>


<?php if ($_SESSION['user'] == true) { ?>

<div class="global-container row row-cols-lg-2 row-cols-1">
	<div class="card login-form mt-5">
		<div class="card-body" style="background-color: #e9ecef;">
			<h3 class="card-title text-center">Ajouter utilisateur !</h3>
			<div class="card-text">

				<?php
					// Affiche un message d'alerte en fonction de la valeur de $count_crea (défini dans la fonction creationAtelier())
					if (isset($_POST['addUser'])) {
						if ($count_crea > 0) {
							echo '<div class="alert alert-danger alert-dismissible fade show text-center fw-bold shadow" role="alert">';
							echo '<span>Une erreur est survenue</span>';
							echo '</div>';
						} else {
							echo '<div class="alert alert-success alert-dismissible fade show text-center fw-bold shadow" role="alert">';
							echo '<span>L\'utilisateur à été ajouter</span>';
							echo '</div>';
						}
					}
				?>
				
				<form action="" method="POST">
					
					<div class="form-group">
						<i class="fa fa-user" aria-hidden="true"></i>
						<label for="exampleInputEmail1">Nom</label>
						<input type="text" class="form-control form-control-sm" id="nom" name="nom" required placeholder="Entrez le nom utilisateur" value="<?php if(isset($_POST['nom'])){echo htmlspecialchars($_POST['nom'], ENT_QUOTES);}?>">
					</div>
					<div class="form-group">
						<i class="fa fa-user-o" aria-hidden="true"></i>
						<label for="exampleInputEmail1">Prénom</label>
						<input type="text" class="form-control form-control-sm" id="prenom" name="prenom" required placeholder="Entrez le prénom utilisateur" value="<?php if(isset($_POST['prenom'])){echo htmlspecialchars($_POST['prenom'], ENT_QUOTES);}?>">
					</div>

					<button type="submit" class="btn btn-primary btn-block" name="addUser">Enregistrer</button>
					
				</form>
			</div>
		</div>
	</div>

	<table class="table table-striped p-1 col-7">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nom</th>
				<th scope="col">Prénom</th>
			</tr>
		</thead>
		<tbody>
			<!-- <tr>
				<th scope="row">exemple: ID</th>
				<td>lebon</td>
				<td>olivier</td>
			</tr> -->
		</tbody>
	</table>
</div>

<?php } ?>

<?php require_once(dirname(__DIR__).'/view/footer.php');?>