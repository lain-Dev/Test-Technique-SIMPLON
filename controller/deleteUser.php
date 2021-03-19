    
 <?php
       
        include '../controller/connexion_bdd.php'; // Connexion à la BDD

        $id = $_POST['id'];

        $sql_user = "DELETE FROM `users` WHERE id = '$id'";
        // On prépare la requête
        $req_user = $bdd->prepare($sql_user);
        // On exécute la requête
        $req_user->execute();
        
        error_log(date('l jS \of F Y h:i:s A') . ": suppresion user avec succès\r\n", 3, '../log.txt');
        header('Location:../view/users.php');exit();
        
