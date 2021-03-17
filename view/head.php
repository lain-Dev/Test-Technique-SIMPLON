<?php
// On démarre une session
session_start();
//il faut vérifier si la session est connecté et l'appelé sinon l session n'est pas définis
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = false;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--icon Onglet-->
    <link rel="shortcut icon" type="image/ico" href="../public/image/icon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="../public/css/style.css">
    <!--Font awesome-->
    <script src="https://use.fontawesome.com/c18e5332f2.js"></script>
    <!--AOS Animate on scroll library-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Centre Culturel St-Denis</title>

</head>

<body>


<div class="wrapper">
    
    <header>
    
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #e9ecef;">
					
            <a class="navbar-brand navbar-logo" href="home.php"><i class="fa fa-home mr-2" aria-hidden="true"></i>Accueil</a>	
                    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                        
                            <!-- Si aucun utilisateur n'est connecté, on affiche raccouris login -->
                            <?php 
                            if ($_SESSION["user"] == false) { 
                            
                            ?>

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="login.php"><i class="fa fa-sign-in mr-2"></i>se connecter</a>
                            </li>
                            <!--Sinon si connecté, affiche button déconnecter-->
                            <?php } else if ($_SESSION['user'] == true) { ?>

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link mt-2" href="poste.php"><i class="fa fa-desktop mr-2"></i>Liste Poste</a>
                            </li>

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link mt-2" href="user.php"><i class="fa fa-address-card-o mr-2"></i>Liste Utilisateur</a>
                            </li>

                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="">
                                    <form action="../controller/logOut.php" style="margin-top: 0px; padding-top: 1px">
                                        <button class="btn btn-primary btn-green-nav btn-sm" type="submit" name="deconnexion" style="margin: 0px;">Déconnexion</button>
                                    </form>
                                </a>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                    
        </nav>		

    </header>

  


