<?php 
require_once(dirname(__DIR__).'/view/head.php');
require_once(dirname(__DIR__).'/controller/connexion.php');
connexion();// fonction gestion la connexion login
?>



<div class="global-container">
	<div class="card login-form mt-5">
		<div class="card-body" style="background-color: #e9ecef;">
			<h3 class="card-title text-center">Se connecter !</h3>
			<div class="card-text">
				<!---->
				<form action="<?= connexion() ?>" method="POST">

					<div class="form-group">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<label for="exampleInputEmail1">Identifiant</label>
						<input type="text" class="form-control form-control-sm" id="logAdmin" name="logAdmin" required size="60" minlength="3" maxlength="60" placeholder="Entrez votre login" value="<?php if(isset($_POST['logAdmin'])){echo htmlspecialchars($_POST['logAdmin'], ENT_QUOTES);}?>">
					</div>

					<div class="form-group">
						<i class="fa fa-key" aria-hidden="true"></i>
						<label for="exampleInputPassword1">Mot passe</label>
						<input type="password" class="form-control form-control-sm" id="password" name="password" required pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" minlength="1" maxlength="20" size="20" placeholder="Entrez votre mot de passe">
					</div>

					<button type="submit" class="btn btn-primary btn-block" name="connexion">Se connecter</button>
					
				</form>
				<!---->
			</div>
		</div>
	</div>
</div>




<?php require_once(dirname(__DIR__).'/view/footer.php');?>