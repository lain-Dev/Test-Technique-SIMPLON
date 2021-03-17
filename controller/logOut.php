<?php
    session_start();
    unset($_SESSION['user']);
    error_log(date('l jS \of F Y h:i:s A') . ": Déconnexion réussie\r\n", 3, '../log.txt');
    header('Location: ../index.php');
?>