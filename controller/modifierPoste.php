<?php

    $count_modif = 0; // Compteur d'erreur
    
       
        global $count_crea;//compteur 
        include '../controller/connexion_bdd.php'; // Connexion à la BDD

        extract($_POST); // Extraction des variables présentes dans le tableau POST
        $requiredInput = array(
            $id,
            $poste
        );

        // Pour chaque éléments dans le tableau $requiredInput, on passe les fonctions htmlentities() et trim()
        foreach ($requiredInput as $input) {
            htmlentities(trim($input));
            if (empty($input)) { // Si un champ est vide, le compteur d'erreur augmente
                $count_crea++;
            }
        }

        if ($count_crea == 0) { // Si le compteur d'erreur est à 0, on ajoute utilisateur

            $sql_user = "UPDATE `postes` SET poste = '$poste' WHERE id = '$id'";
            $req_user = $bdd->prepare($sql_user);

            $req_user->execute();

            error_log(date('l jS \of F Y h:i:s A') . ": poste a été modifié avec succès\r\n", 3, '../log.txt');
            header('Location:../view/postes.php');exit();
        }
