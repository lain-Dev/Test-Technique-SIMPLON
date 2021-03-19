<?php foreach($users as $user):?>

<tr>
		<form action="../controller/modifierUser.php" method="POST" style="margin: 0px; padding: 0px;"> 

			<th scope="row"><?= htmlspecialchars($user->id); ?></th>
			<input type="hidden" value="<?= htmlspecialchars($user->id);?>" name="id"><!--Input cacher poure récupérer ID de la ligne ! -->
			<td>
				<input type="text" class="form-control" placeholder="nom" value="<?= htmlspecialchars($user->nom); ?>">
			</td>
			<td>
				<input type="text" class="form-control" placeholder="prenom" value="<?= htmlspecialchars($user->prenom); ?>">
			</td>
			
			<td>
				<a class="d-flex">

			<button class="btn btn-success btn-sm mr-2" type="submit" name="modifierUser" style="margin-top: 0px;">
				<i class="fa fa-refresh" aria-hidden="true"></i>
			</button>

		</form>
		
		<form action="../controller/deleteUser.php" method="POST" style="margin: 0px; padding: 0px;">

                	<input type="hidden" value="<?= htmlspecialchars($user->id);?>" name="id"><!--Input cacher poure récupérer ID de la ligne ! -->

                    <button class="btn btn-danger btn-sm" type="submit" name="supprimerUser" style="margin-top: 0px;">X</button>
		</form> 
		
			</a>
		</td>
	
</tr>

<?php endforeach; ?>  