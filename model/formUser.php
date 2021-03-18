<form action="" method="POST">

    <div class="form-group">
        <i class="fa fa-user" aria-hidden="true"></i>
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control form-control-sm" id="nom" name="nom" required placeholder="Entrez le nom utilisateur" value="<?php if (isset($_POST['nom'])) {echo htmlspecialchars($_POST['nom'], ENT_QUOTES);} ?>">
    </div>
    <div class="form-group">
        <i class="fa fa-user-o" aria-hidden="true"></i>
        <label for="exampleInputEmail1">Prénom</label>
        <input type="text" class="form-control form-control-sm" id="prenom" name="prenom" required placeholder="Entrez le prénom utilisateur" value="<?php if (isset($_POST['prenom'])) {echo htmlspecialchars($_POST['prenom'], ENT_QUOTES);} ?>">
    </div>

    <button type="submit" class="btn btn-primary btn-block" name="addUser">Enregistrer</button>

</form>