<?php require'entete.php'?>
<div class="container" style="width: 1108px;"> 
    <h1>Statistique des véhicules</h1>
    <table border="1" style="text-align:left;">
    <tr>
    <td>Titre</td>
    <td>Nombre</td>
    </tr>
    <?php  
   date_default_timezone_set("Indian/Antananarivo");
   $jour= date("Y-m-d",time());  
   $date = date("m");
   $date_mois_dernier = 02; 
   $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
   $sql3 = $base->query("SELECT COUNT(vehicule.id_vehicule) as isany FROM prix_lavage 
   JOIN vehicule ON prix_lavage.id_prix=vehicule.id_prix WHERE id_date = 4 AND id_categorie= 2 AND 3");
   $donnees = $sql3->fetch()
   ?>
    <tr>
        <th>Nombre de voitures lavés du jour <?=$jour?></th> 
        <td> <?= $donnees ['isany']; ?></td>
    </tr>

   <?php
    $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
   $sql3 = $base->query("SELECT COUNT(vehicule.id_vehicule) as isany FROM prix_lavage 
   JOIN vehicule ON prix_lavage.id_prix=vehicule.id_prix WHERE id_date = 4 AND id_categorie=1");
   $donnees = $sql3->fetch()
   ?>
    <tr>
        <th>Nombre de véhicules en 2 roues lavés du jour <?=$jour?></th>
        <td> <?= $donnees ['isany']; ?></td>
    </tr>
    <?php     
   $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
   $sql = $base->query("SELECT COUNT(vehicule.id_vehicule) as nb
   FROM prix_lavage JOIN vehicule ON prix_lavage.id_prix=vehicule.id_prix WHERE id_date = 3 OR 4 AND id_categorie = 2 OR 3 ");
   $donnees = $sql->fetch()
   ?>
   
   <tr>
        <th>Nombre de voitures lavés du mois courant (<?=$date?>)</th>
        <td> <?= $donnees ['nb']; ?></td>
    </tr>
    <?php       
   $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
   $sql = $base->query("SELECT COUNT(vehicule.id_vehicule) as nb
   FROM prix_lavage JOIN vehicule ON prix_lavage.id_prix=vehicule.id_prix WHERE id_date = 3 OR 4 AND id_categorie = 1 ");
   $donnees = $sql->fetch()
   ?>
   
   <tr>
        <th>Nombre de véhicules en 2 roues lavés du mois courant (<?=$date?>)</th>
        <td> <?= $donnees ['nb']; ?></td>
    </tr>
    <?php       
   $sql2 = $base->query("SELECT AVG(vehicule.id_vehicule) as nbr
   FROM vehicule JOIN prix_lavage ON prix_lavage.id_prix=vehicule.id_prix WHERE id_categorie = 2 AND 3");
   $donnees = $sql2->fetch()
   ?>
  <tr>
        <th>Nombre de voitures lavés / jour en moyenne dans le mois (<?=$date?>)</th>
        <td> <?= $donnees ['nbr']; ?></td>
    </tr>
    <?php     
   $sql2 = $base->query("SELECT AVG(vehicule.id_vehicule) as nbr
   FROM vehicule JOIN prix_lavage ON prix_lavage.id_prix=vehicule.id_prix WHERE id_categorie = 1");
   $donnees = $sql2->fetch()
   ?>
  <tr>
        <th>Nombre de véhicules en 2 roues lavés / jour en moyenne dans le mois  (<?=$date?>)</th>
        <td> <?= $donnees ['nbr']; ?></td>
    </tr>
    </table>
    <?php ?>
</div>   
</html>
</body>
</html>
