    
 <?php
       
        include '../controller/connexion_bdd.php'; // Connexion à la BDD

        $id = strip_tags($_POST['id']);

        $sql_user = 'DELETE FROM `users` WHERE id = $id';
        // On prépare la requête
        $req_user = $bdd->prepare($sql_user);
        // On "accroche" les paramètre (id)
        $req_user->bindValue(':id', $id, PDO::PARAM_INT);
        // On exécute la requête
        $req_user->execute();
        
        error_log(date('l jS \of F Y h:i:s A') . ": suppresion user avec succès\r\n", 3, '../log.txt');
        header('Location:../view/users.php');exit();
        
