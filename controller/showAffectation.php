<?php

$error = null;

//Connexion à la BDD
include '../controller/connexion_bdd.php';
if ($bdd) {
    try {
        //all annonce ok
        $query = $bdd->query("SELECT * FROM `affectations`");
        $affectations = $query->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        $error = $e->getMessage();

        exit();
    } catch (PDOException $e) {
        $error = $e->getMessage();

        exit();
    }
} else {
    error_log(date('l jS \of F Y h:i:s A') . ": connexion pour affichage affectation éxchoué !\r\n", 3, '../log.txt');
    exit();
}