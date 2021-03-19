    
 <?php
    // // On vérifie si le serveur reçoit un POST et si on a cliqué sur le bouton de supprimerUser
    // if (isset($_POST['supprimerUser'])) {
    //     global $count_crea;
    //     include '../controller/connexion_bdd.php'; // Connexion à la BDD

    //     extract($_POST); // Extraction des variables présentes dans le tableau POST
    //     $requiredInput = array(
    //         $nom,
    //         $prenom,
    //         $id
    //     );

    //     $sql_user = 'DELETE FROM users  WHERE id = :id';
    //     $req_user = $bdd->prepare($sql_user);

    //     $req_user->execute(array(
    //         'nom' => $nom,
    //         'prenom' => $prenom,
    //         'id' => $id
    //     ));

    //     error_log(date('l jS \of F Y h:i:s A') . ": suppresion user avec succès\r\n", 3, '../log.txt');
    //         header('Location:../view/users.php');exit();
    //     }
        
    

require_once(dirname(__DIR__).'/class/Connexion_bdd.php');


$error = null;

$db = Connection::getPDO();
$id_delete = $_POST['id_delete'];
if($db){
    try{
        $query = 'DELETE FROM `users` WHERE id_utilisateurs = :id_user';
        $sth = $db->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(
            ':id_user' => $id_delete
        ));
        // $logger->info("Suppression d'un equipement -- TABLE EQUIPEMENTS OK");
        
        // On complete les valeurs pour session
        $_SESSION['flash'] = array('Success', "Utilisateur supprimé avec succès");
        header("Location: ../views/users.php");
    }catch(PDOException $e){
        $error = $e->getMessage();
        // $logger->error("Echec lors de la suppression de l'equipement -- $error");
        $_SESSION['flash'] = array('Error', "Echec lors de la suppression de l'utilisateur");
        header("Location: ../views/users.php");
    }
}else{
    // $logger->alert("Echec lors de la suppression de l'equipement -- Impossible de se connecter à la base de données");
    $_SESSION['flash'] = array('Error', "Echec lors de la suppression de l'utilisateur");
    header("Location: ../views/users.php");
};