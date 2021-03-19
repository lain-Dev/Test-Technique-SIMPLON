<?php foreach($postes as $poste):?>

<tr>
		<form action="../controller/modifierPoste.php" method="POST" style="margin: 0px; padding: 0px;"> 

			<th scope="row"><?= htmlspecialchars($poste->id); ?></th>
			<input type="hidden" value="<?= htmlspecialchars($poste->id);?>" name="id"><!--Input cacher poure récupérer ID de la ligne ! -->
			<td>
				<input type="text" class="form-control" placeholder="nom" value="<?= htmlspecialchars($poste->poste); ?>">
			</td>	
			<td>
				<a class="d-flex">

			<button class="btn btn-success btn-sm mr-2" type="submit" name="modifierPoste" style="margin-top: 0px;">
				<i class="fa fa-refresh" aria-hidden="true"></i>
			</button>

		</form>
		
		<form action="../controller/deletePoste.php" method="POST" style="margin: 0px; padding: 0px;">

                	<input type="hidden" value="<?= htmlspecialchars($poste->id);?>" name="id"><!--Input cacher poure récupérer ID de la ligne ! -->

                    <button class="btn btn-danger btn-sm" type="submit" name="supprimerPoste" style="margin-top: 0px;">X</button>
		</form> 
		
			</a>
		</td>
	
</tr>

<?php endforeach; ?>  