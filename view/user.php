<?php require_once(dirname(__DIR__).'/view/head.php');?>


<div class="global-container row row-cols-lg-2 row-cols-1">
	<div class="card login-form mt-5">
		<div class="card-body" style="background-color: #e9ecef;">
			<h3 class="card-title text-center">Ajouter utilisateur !</h3>
			<div class="card-text">
				<!--
				<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
				<form action="" method="POST" id="user">
					<!-- to error: add class "has-danger" -->
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
          			<div class="form-group">
						<i class="fa fa-id-card-o" aria-hidden="true"></i>
						<label for="exampleInputEmail1">Numero abonné</label>
						<input type="text" class="form-control form-control-sm" id="num_carte" name="num_carte" required placeholder="Entrez le numéro carte de l'utilisateur" value="<?php if(isset($_POST['num_carte'])){echo htmlspecialchars($_POST['num_carte'], ENT_QUOTES);}?>">
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
				<th scope="col">Nom</th>
				<th scope="col">Prénom</th>
				<th scope="col">Numéro membre</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">exemple: ID</th>
				<td>lebon</td>
				<td>olivier</td>
				<td>465</td>
			</tr>
		</tbody>
	</table>
</div>





<?php require_once(dirname(__DIR__).'/view/footer.php');?>