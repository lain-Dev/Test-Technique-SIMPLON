<?php 
require_once(dirname(__DIR__).'/view/head.php');
require_once(dirname(__DIR__).'/controller/addUser.php');
ajouterUser();

?>


<?php if ($_SESSION['user'] == true) { ?>

	<?php
		// Affiche un message d'alerte en fonction de la valeur de $count_crea (défini dans addUser.php)
		if (isset($_POST['addUser'])) {
			if ($count_crea > 0) {
				echo '<div class="container alert alert-danger alert-dismissible fade show text-center fw-bold shadow" role="alert">';
				echo '<span>Une erreur est survenue</span>';
				echo '</div>';
			} else {
				echo '<div class=" container alert alert-success alert-dismissible fade show text-center fw-bold shadow" role="alert">';
				echo '<span>L\'utilisateur à été ajouter</span>';
				echo '</div>';
			}
		}
	?>

<div class="global-container row row-cols-lg-2 row-cols-1 ">
	<div class="card login-form mt-5 ">
		<div class="card-body " style="background-color: #e9ecef;">
			<h3 class="card-title text-center">Ajouter utilisateur !</h3>
			<div class="card-text">

				<?php require_once(dirname(__DIR__).'/model/formUser.php'); ?>				
			
			</div>
		</div>
	</div>

	<table class="table table-striped p-1 col-9">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nom</th>
				<th scope="col">Prénom</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			
			<?php require_once(dirname(__DIR__).'/controller/showUsers.php'); ?>	
			<?php require_once(dirname(__DIR__).'/model/listUser.php'); ?>

		</tbody>
	</table>
</div>

<?php } ?>

<?php require_once(dirname(__DIR__).'/view/footer.php');?>