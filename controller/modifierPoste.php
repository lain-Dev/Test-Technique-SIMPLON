<?php

    $count_modif = 0; // Compteur d'erreur
    
    if (isset($_POST['mofifierPoste'])) {
       
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
            // Dans la table `user`, on insère `nom` et `prenom`
            $sql_user = 'UPDATE INTO postes (poste) VALUES :poste WHERE id = :id';
            $req_user = $bdd->prepare($sql_user);

            $req_user->execute(array(
                'poste' => $poste
            ));

            error_log(date('l jS \of F Y h:i:s A') . ": poste a été modifié avec succès\r\n", 3, '../log.txt');
            header('Location:../view/postes.php');exit();
        }

    }