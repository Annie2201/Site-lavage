<?php require'entete.php'?>
<div class="container" style="width: 1108px;"> 
<h2>Prix de voiture normale</h2>
    <table border="1">
        <tr>
            <th>Type de Lavage</th>
            <th>Temps d'attente</th>
            <th>Prix</th>
            <th>Type de voiture </th>
        </tr>
    <?php 
    $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
    $reponse= $base->query('SELECT * FROM prix_lavage as pl JOIN categorie AS ct ON pl.id_categorie = ct.id_categorie WHERE pl.id_categorie = 2');
    while ($donnees = $reponse->fetch())
    { 
        $type= $donnees['type_lavage'];
        $times=$donnees['temps_attente'];  
        $prix = $donnees ['prix'];        
        $model=$donnees['names'];
        ?> 
        <tr>
        <td><?php echo $type; ?></td>
        <td><?php echo $times.'min'; ?></td>
        <td><?php echo $prix.'Ar'; ?></td>
        <td><?php echo $model; ?></td>
        </tr>    
    <?php } ?>
    </table>
</div>   
</html>
</body>
</html>