
<?php foreach($users as $user):?>

<tr>
	
		<th scope="row"><?= htmlspecialchars($user->id_user); ?></th>
		<td>
			<input type="text" class="form-control" placeholder="nom" value="<?= htmlspecialchars($user->nom); ?>">
		</td>
		<td>
			<input type="text" class="form-control" placeholder="prenom" value="<?= htmlspecialchars($user->prenom); ?>">
		</td>
        
		<td>
			<a class="d-flex">
		
		<form action="../controller/deleteUser.php" style="margin: 0px; padding: 0px;">
                	<input type="hidden" value="<?= htmlspecialchars($user->id_user);?>" name="id_delete"><!--Input cacher poure récupérer ID de la ligne ! -->

                    <button class="btn btn-danger btn-sm mr-1" type="submit" name="supprimerUser" style="margin-top: 0px;">X</button>
                
                    <button class="btn btn-success btn-sm" type="submit" name="modifierUser" style="margin-top: 0px;">
					    <i class="fa fa-refresh" aria-hidden="true"></i>
				    </button>
                
		</form>
			</a>
		</td>
	
</tr>

<?php endforeach; ?>  