<?php 
require_once(dirname(__DIR__).'/view/head.php');
?>


<?php if ($_SESSION['user'] == true) { ?>


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