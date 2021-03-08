<?php

session_start();

if ( isset( $_SESSION['nom'] ) ){
    session_destroy();
}

header('Location: connexion.php');
?>