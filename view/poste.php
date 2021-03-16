<?php require_once(dirname(__DIR__).'/view/head.php');?>


<div class="global-container">
	<div class="card login-form mt-5">
		<div class="card-body" style="background-color: #e9ecef;">
			<h3 class="card-title text-center">Ajouter Poste !</h3>
			<div class="card-text">
				<!--
				<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
				<form action="" method="POST" id="loginPage">
					<!-- to error: add class "has-danger" -->
					<div class="form-group">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<label for="exampleInputEmail1">Marque du poste</label>
						<input type="text" class="form-control form-control-sm" id="marque" name="marque" required placeholder="Entrez la marque du poste" value="<?php if(isset($_POST['marque'])){echo htmlspecialchars($_POST['marque'], ENT_QUOTES);}?>">
					</div>
					<div class="form-group">
          <i class="fa fa-id-badge" aria-hidden="true"></i>
						<label for="exampleInputEmail1">Numéro de série</label>
						<input type="text" class="form-control form-control-sm" id="num_serie" name="num_serie" required placeholder="Entrez le numéro de série" value="<?php if(isset($_POST['num_serie'])){echo htmlspecialchars($_POST['num_serie'], ENT_QUOTES);}?>">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
					
				</form>
			</div>
		</div>
	</div>
</div>





<?php require_once(dirname(__DIR__).'/view/footer.php');?>