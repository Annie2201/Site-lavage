<?php /*if(!isset($_SESSION['id_user'])){
    header('Location: index.php');
}*/?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interface Administrateur</title>
    <link rel="stylesheet" href="second.css">
</head>
<body>
<div class="container"> 
<ul id="menu">
   <li><a href="home.php">Acceuil</a></li>
   <li><a href="#">Information Laveur</a>
      <ul>
         <li><a href="laveur.php">Liste Laveur et incription de nouveau laveur</a></li>
         <li><a href="disponibilite.php">Laveur actif et disponible</a></li>
      </ul>
   </li>
   <li><a href="#">Statistiques</a>
      <ul>
         <li><a href="pages.php">Statistique voitures et vehicules 2 roues</a></li>
         <li><a href="recettej.php">Recette</a></li>
      </ul>
   </li>
   <li><a href="#">Voiture</a>
   <ul>
         <li><a href="voiture.php">Liste de voiture</a></li>
         <li><a href="mea_admin.php">Voiture en attente <br> Assigner à un laveur</a></li>
    </ul>
   </li>
   <li><a href="#">Prix de lavages</a>
      <ul>
      <li><a href="prixdeux.php">2 roues</a></li>
        <li><a href="prix_deux.php">4X4 et Camionettes</a></li>
        <li><a href="deux_prix.php">Voitures normal</a></li>
      </ul>
   </li>
   <li><a href="logout.php">Déconnexion</a></li>
</ul>
</div>