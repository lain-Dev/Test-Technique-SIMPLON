<form action="../controller/addPoste.php" method="POST">
			
	<div class="form-group">
		<i class="fa fa-desktop" aria-hidden="true"></i>
		<label for="num_poste">Numéro du poste</label>
		<input type="text" class="form-control form-control-sm" id="poste" name="poste" required placeholder="Entrez le numéro du poste" value="<?php if(isset($_POST['num_poste'])){echo htmlspecialchars($_POST['poste'], ENT_QUOTES);}?>">

	</div>

	<button type="submit" class="btn btn-primary btn-block" name="addPoste">Enregistrer</button>
</form>