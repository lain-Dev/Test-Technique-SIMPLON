<?php require_once(dirname(__DIR__).'/view/head.php');?>

<div class="global-container">
	<div class="card login-form mt-5">
		<div class="card-body" style="background-color: #e9ecef;">
			<h3 class="card-title text-center">Se connecter !</h3>
			<div class="card-text">
				<form action="admin.php" method="POST" id="loginPage">
					<div class="form-group">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<label for="exampleInputEmail1">Identifiant</label>
						<input type="text" class="form-control form-control-sm" id="login" name="login" required placeholder="Entrez votre login" value="<?php if(isset($_POST['login'])){echo htmlspecialchars($_POST['login'], ENT_QUOTES);}?>">
					</div>
					<div class="form-group">
						<i class="fa fa-key" aria-hidden="true"></i>
						<label for="exampleInputPassword1">Mot passe</label>
						<input type="password" class="form-control form-control-sm" id="password" name="password" required placeholder="Entrez votre mot de passe">
					</div>
					<button type="submit" class="btn btn-primary btn-block">Se connecter</button>
					
				</form>
			</div>
		</div>
	</div>
</div>




<?php require_once(dirname(__DIR__).'/view/footer.php');?>