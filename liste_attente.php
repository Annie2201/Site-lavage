<?php require'header.php'?>
<div class="container" style="width: 1069px;"> 
<h1>Liste des voitures en attentes</h1>
    <table border="1">
        <tr>
        <th>N°</th>
        <th>Modele</th>
        <th>Statut</th>
        </tr>
    <?php 
    $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
    $reponse= $base->query('SELECT * FROM vehicule as v 
    JOIN prise_en_charge as pec ON v.id_vehicule = pec.id_vehicule  
    WHERE pec.titre="En attente" 
    ');
    while ($donnees = $reponse->fetch())
    { 
        $chose=$donnees['titre'];
        $statut=$donnees['id_pec'];
        $id= $donnees['id_vehicule'];
        $model=$donnees['model'];
        
    ?> 
        <tr>
        <td><?php echo $statut; ?></td>
        <td><?php echo $model; ?></td>
        <td><?php echo $chose; ?></td>
        </tr>
        <?php }?> 
    </table> <br><br>
    
    <form action="" method="GET">
         <button type="submit" name="pec" style="background: none;border: none;"><img src="bouton3.png">
        </button>
        </form>       
    <?php 
    if (isset($_GET['pec']))
    {
        $fiara=$id;
        $request='UPDATE prise_en_charge SET titre="Prise en charge"  WHERE  titre="En attente"  AND id='.$fiara;  
        $base->exec($request);
        echo $_SESSION['nom'].$fiara.' vous allez prendre en charge la voiture '.$model; 
    } ?> 
    
</div>
</body>
</html>