
<?php foreach($users as $user):?>

<tr>
	<form action="" style="margin: 0px; padding: 0px;">
		<th scope="row"><?= htmlspecialchars($user->id); ?></th>
		<td>
			<input type="text" class="form-control" placeholder="nom" value="<?= htmlspecialchars($user->nom); ?>">
		</td>
		<td>
			<input type="text" class="form-control" placeholder="prenom" value="<?= htmlspecialchars($user->prenom); ?>">
		</td>
        </form>
		<td>
			<a class="d-flex">
			
                	<input type="hidden" value="<?= htmlspecialchars($user->id);?>" name="id"><!--Input cacher poure récupérer ID de la ligne ! -->

                    <button class="btn btn-danger btn-sm mr-1" type="submit" name="supprimerUser" style="margin-top: 0px;">X</button>
                
                    <button class="btn btn-success btn-sm" type="submit" name="modifierUser" style="margin-top: 0px;">
					    <i class="fa fa-refresh" aria-hidden="true"></i>
				    </button>
                
				
			</a>
		</td>
	</form>
</tr>

<?php endforeach; ?>  