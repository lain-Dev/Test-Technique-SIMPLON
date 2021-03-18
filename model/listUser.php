
<?php foreach($users as $user):?>

<tr>
	<form action="../controller/formUser.php.php" style="margin: 0px; padding: 0px;">
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
                <form action="" style="margin: 0px; padding: 0px;">
					<input type="hidden" value="<?= htmlspecialchars($user->id);?>" name="id">
                    <button class="btn btn-danger btn-sm mr-1" type="submit" name="supprimerUser" style="margin-top: 0px;">X</button>
                </form>
				
                <form action="" style="margin: 0px; padding: 0px;">
                    <button class="btn btn-success btn-sm" type="submit" name="modifierUser" style="margin-top: 0px;">
					    <i class="fa fa-refresh" aria-hidden="true"></i>
				    </button>
                </form>
				
			</a>
		</td>
	
</tr>

<?php endforeach; ?>  