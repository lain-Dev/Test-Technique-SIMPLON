<?php
    
    function effacerUser()
{
   
    // On vérifie si le serveur reçoit un POST et si on a cliqué sur le bouton de supprimerUser
    if (isset($_POST['supprimerUser'])) {

        include '../controller/connexion_bdd.php'; // Connexion à la BDD

        extract($_POST);

        $sql = 'DELETE FROM users  WHERE id = "' . $_POST['id'] . '"';
        $bdd->query($sql);

        

        error_log(date('l jS \of F Y h:i:s A') . ": suppresion user avec succès\r\n", 3, '../log.txt');
        header('Location:../view/users.php');
        
        
    }else {
        error_log(date('l jS \of F Y h:i:s A') . ": suppresion user avec ECHEC !\r\n", 3, '../log.txt');
      
    }
}