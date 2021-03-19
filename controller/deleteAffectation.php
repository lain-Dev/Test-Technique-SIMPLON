<?php
       
       include '../controller/connexion_bdd.php'; // Connexion à la BDD

       $id = $_POST['id'];

       $sql_user = "DELETE FROM `affectations` WHERE id = '$id'";
       // On prépare la requête
       $req_user = $bdd->prepare($sql_user);
       // On exécute la requête
       $req_user->execute();
       
       error_log(date('l jS \of F Y h:i:s A') . ": suppresion postes avec succès\r\n", 3, '../log.txt');
       header('Location:../view/home.php');exit();