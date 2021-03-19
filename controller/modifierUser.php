<?php

    $count_modif = 0; // Compteur d'erreur
    
       
        extract($_POST); // Extraction des variables présentes dans le tableau POST
        if (!empty($nom) && !empty($prenom) ) { // On vérifie que les champs ne sont pas vides
            // On passe la fonction htmlentities() aux différents champs
            htmlentities($nom);
            htmlentities($prenom);
            include '../controller/connexion_bdd.php'; // Connexion à la BDD

            // Mise à jour de la date, l'heure et le nombre de places
            $sql = 'UPDATE `users` SET nom = "' . $nom . '", prenom = "' . $prenom . '" WHERE id = "' . $id . '"';
            $bdd->query($sql);
            error_log(date('l jS \of F Y h:i:s A') . ": user modifiée avec succès !\r\n", 3, '../log.txt');
            header('Location:../view/users.php');exit();
        } else { // Si des champs sont vides, le compteur d'erreurs s'incrémente
          
            error_log(date('l jS \of F Y h:i:s A') . ": erreur lors de la modification de la user !\r\n", 3, '../log.txt');
            header('Location:../view/home.php');exit();
        }
    