<?php

function ajouterUser()
{
    $error_addUser = "";
    global $error_addUser;
    // On vérifie si le serveur reçoit un POST et si on a cliqué sur le bouton de addUser
    if (isset($_POST['addUser'])) {
        global $count_crea;//compteur qui va m'afficher un message success ou danger
        include '../controller/connexion_bdd.php'; // Connexion à la BDD

        extract($_POST); // Extraction des variables présentes dans le tableau POST
        $requiredInput = array(
            $nom,
            $prenom
        );

        // Pour chaque éléments dans le tableau $requiredInput, on passe les fonctions htmlentities() et trim()
        foreach ($requiredInput as $input) {
            htmlentities(trim($input));
            if (empty($input)) { // Si un champ est vide, le compteur d'erreur augmente
                $count_crea++;
            }
        }

        if ($count_crea == 0) { // Si le compteur d'erreur est à 0, on ajoute utilisateur
            // Dans la table `user`, on insère `nom`, `nom` et `prenom`
            $sql_user = 'INSERT INTO users (nom, prenom) VALUES (:nom, :prenom)';
            $req_user = $bdd->prepare($sql_user);

            $req_user->execute(array(
                'nom' => $nom,
                'prenom' => $prenom
            ));

            error_log(date('l jS \of F Y h:i:s A') . ": utilisateur a été créé avec succès\r\n", 3, '../log.txt');
            header('Location:../view/users.php');exit();
        }
        
    }
}




