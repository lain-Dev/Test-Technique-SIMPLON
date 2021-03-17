<?php

$error_login = '';
$_SESSION['user'] = false;
/**
 * 
 * Fonction de connexion
 * 
 */
function connexion()
{
    global $error_login;
    // On vérifie si le serveur reçoit un POST et si on a cliqué sur le bouton de connexion
    if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['connexion'])) {

        include '../model/connexion_bdd.php'; // Connexion à la BDD

        // On selectionne la ligne dans la table 'admin' où login correspond à notre $_POST["login"]
        $req = $bdd->prepare('SELECT * FROM administrateur WHERE logAdmin = :logAdmin');

        $req->execute(array(
            'logAdmin' => $_POST['logAdmin']
        ));

        $resultat = $req->fetch();

        // On vérifie si le password du $_POST correspond au password dans la BDD
        $password = $_POST["password"];
        if ($resultat["password"] != $password) { // Si un des deux input ne correspond pas, on renvoi un message d'erreur
            $error_login = '<div class="alert alert-danger">Mauvais identifiant ou mot de passe !</div>';
            error_log(date('l jS \of F Y h:i:s A') . ": Mot de passe ou identifiant incorrect, échec de la connexion\r\n", 3, '../log.txt');
        } else {
             // Si le password correspond on lance la session user
                $_SESSION['user'] = true;
                error_log(date('l jS \of F Y h:i:s A') . ": Identifiants corrects, connexion réussie\r\n", 3, '../log.txt');
                header('Location: ../index.php'); // Redirection vers la page d'accueil
                die;
        }
    }

    // Quand l'utilisateur clique sur btn deconnexion on détruit sa session et on reviens à l'accueil
    if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['deconnexion'])) {
        $_SESSION['user'] = false;
        session_destroy();
        error_log(date('l jS \of F Y h:i:s A') . ": Déconnexion réussie\r\n", 3, '../log.txt');
        header('Location: ../index.php');
        die;
    }
}
