<?php


    $error_addUser = "";
    global $error_addUser;
    
    if (isset($_POST['affectation'])) {
        global $count_crea;//compteur 
        include '../controller/connexion_bdd.php'; // Connexion à la BDD

        extract($_POST); // Extraction des variables présentes dans le tableau POST
        $requiredInput = array(
            $id_poste,
            $horaire,
            $date,
            $id_user
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
            $sql_user = 'INSERT INTO affectations (id_poste, horaire, date, id_user) VALUES (:id_poste, :horaire, :date, :id_user)';
            $req_user = $bdd->prepare($sql_user);

            $req_user->execute(array(
                'id_poste' => $id_poste,
                'horaire' => $horaire,
                'date' => $date,
                'id_user' => $id_user
            ));

            error_log(date('l jS \of F Y h:i:s A') . ": affectation a été créé avec succès\r\n", 3, '../log.txt');
            header('Location:../view/home.php');exit();
        }
        
    }




