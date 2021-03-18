<?php

function effacerUser()
{
    
    
    // On vérifie si le serveur reçoit un POST et si on a cliqué sur le bouton de supprimerUser
    if (isset($_POST['supprimerUser'])) {
        
        include '../controller/connexion_bdd.php'; // Connexion à la BDD
        $id_delete = $_POST['id'];
        extract($_POST); // Extraction des variables présentes dans le tableau POST
       

            // Dans la table `user`, on insère `nom`, `nom` et `prenom`
            $sql_user = 'DELETE FROM `users` WHERE id = :id';
            $req_user = $bdd->prepare($sql_user);

            $req_user->execute(array(
                ':id' => $id_delete
            ));

            error_log(date('l jS \of F Y h:i:s A') . ": suppression user OK !\r\n", 3, '../log.txt');
        header("Location: ../views/user.php");
        
        
    }else {
        error_log(date('l jS \of F Y h:i:s A') . ": suppression user ECHEC !\r\n", 3, '../log.txt'); 
    }
}