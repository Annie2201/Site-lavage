<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="trois.css">
    <title>Interface laveur</title>
</head>
<body>
<div class="container"> 
<ul id="menu">
   <li><a href="acceuil.php">Acceuil</a></li>
   <li><a href="#">Voiture</a>
      <ul>
         <li><a href="auto.php">Liste de tous voiture </a></li>
         <li><a href="liste_attente.php">Liste de voiture en attente</a></li>
      </ul>
   </li>
    <li><a href="#">Prix de lavages</a>
      <ul>
      <li><a href="prixun.php">2 roues</a></li>
         <li><a href="prix_un.php">4X4 et Camionettes</a></li>
         <li><a href="un_prix.php">Voitures normal</a></li>
      </ul>
   </li>
   <li><a href="dispo.php">Disponibilité</a>
    <li><a href="logout.php">Déconnexion</a></li>
</ul>
</div>