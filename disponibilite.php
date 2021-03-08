<?php require'entete.php'?>
<div class="container" style="width: 1108px;"> 
    <div>
    <h2>Statut des laveur</h2>
    <table border="1">
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Statut</th>
        </tr>
    <?php 
    $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
    $reponse= $base->query('SELECT * FROM test as t JOIN user as u ON t.id_user=u.id_user GROUP BY t.id_user ORDER BY id_test DESC');
    while ($donnees = $reponse->fetch())
    { 
        $id= $donnees['id_user'];
        $nom= $donnees['nom'];
        $prenom= $donnees ['prenom'];
        $statut= $donnees['statut'];
        ?>
        <tr>
            <td>000<?php echo $id; ?></td>
            <td><?php echo $nom; ?></td>
            <td><?php echo $prenom; ?></td>
            <td><?php echo $statut; ?></td>
        </tr>    
    <?php } ?>
    </table>
    </div>
</div>   
</html>
</body>
</html>
