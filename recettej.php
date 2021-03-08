<?php require'entete.php'?>
<div class="container" style="width: 1069px;"> 
<h1>Liste des voitures</h1>
    <table border="1">
        <tr>
            <th>N°</th>
            <th>Catégorie</th>
            <th>Nom du Propriétaire</th>
            <th>Prénom du Propriétaire</th>
            <th>Temps d'attente</th>
            <th>Type Lavage </th>
            <th>Modèle </th>
            <th>Prix</th>
        </tr>
    <?php 
    $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
    $reponse= $base->query('SELECT * FROM vehicule as v JOIN prix_lavage AS pl ON v.id_prix = pl.id_prix
        JOIN categorie as ct ON pl.id_categorie = ct.id_categorie
        ORDER BY id_vehicule DESC LIMIT 5');
    while ($donnees = $reponse->fetch())
    { 
        $id= $donnees['id_vehicule'];
        $type= $donnees['type_lavage'];
        $proprio= $donnees ['name'];    
        $prix = $donnees ['prix'];
        $times=$donnees['temps_attente'];
        $categorie=$donnees['names'];
        $prenom=$donnees['prenoms'];
        $model=$donnees['model'];
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $categorie; ?></td>
            <td><?php echo $proprio; ?></td>
            <td><?php echo $prenom; ?></td>
            <td><?php echo $times.'min'; ?></td>
            <td><?php echo $type; ?></td>
            <td><?php echo $model; ?></td>
            <td><?php echo $prix.'Ar'; ?></td>
            </tr>    
        <tr>
        <?php } ?>
    <?php       
   $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
   $sql = $base->query("SELECT SUM(prix_lavage.prix) as somme
   FROM prix_lavage JOIN vehicule ON prix_lavage.id_prix=vehicule.id_prix ");
        $donnees = $sql->fetch()
        ?>
            <tr>
                <th colspan="3">Totale générale</th>
                <td colspan="5"> <?php echo $donnees ['somme'].'Ar'; ?></td>
            </tr>
    <?php       
   $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
   $sql = $base->query("SELECT SUM(prix_lavage.prix) as somme
   FROM prix_lavage JOIN vehicule ON prix_lavage.id_prix=vehicule.id_prix WHERE id_date= 4 ");
        $donnees = $sql->fetch()
        ?>
            <tr>
                <th colspan="3">Totale du jour</th>
                <td colspan="5"> <?php echo $donnees ['somme'].'Ar'; ?></td>
            </tr>
            <?php       
   $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
   $sql = $base->query("SELECT SUM(prix_lavage.prix) as somme
   FROM prix_lavage JOIN vehicule ON prix_lavage.id_prix=vehicule.id_prix WHERE id_date= 3 AND 4 ");
        $donnees = $sql->fetch()
        ?>
            <tr>
                <th colspan="3">Totale du mois</th>
                <td colspan="5"> <?php echo $donnees ['somme'].'Ar'; ?></td>
            </tr>
    </table>
</div>  
</html>
</body>
</html>



