<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lavazy</title>
    <link rel="stylesheet" href="principale.css">
</head>
<body>

<div class="col-sm">
<h1>Page de Connexion</h1>
<form action="login.php" method="POST">
        <input type="text" name="nom" placeholder="Nom" class="un" required><br><br>
        <input type="password" name="mdp" placeholder="Mot de passe" class="un" required><br><br>
        <input type="checkbox" name="admin" class="larger"><label style="font-family: ink free; font-size: 25px;">Administrateur</label><br><br>
        <button type="submit" name="valider" class="pulse">Connexion</button>
</form>
</div>
</body>
</html>
<?php

