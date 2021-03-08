<?php require'header.php'?>
<div class="container" style="width: 1108px;"> 
    <h1><?php echo $_SESSION['nom'];?> <?php echo $_SESSION['prenom'];?> En quel statut est tu?</h1>
    <?php
    ?>
    
    <form action="" method="GET">
        <input type="text"name="matricule" placeholder="Confirmer votre matricule" class="truc"><br><br><br>
        <button type="submit" name="dispo" style="background: none;border: none;" values="1"><img src="bouton1.png" alt=""></button>
        <button type="submit" name="oqp" style="background: none;border: none;"><img src="bouton2.png" alt=""></button>
    </form>
    <?php
    if(isset($_GET['dispo']))
    {
        $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root');//dispo
        $mlle=$_GET['matricule'];
        $request='UPDATE test SET statut="Disponible"  WHERE  statut="Non Disponible"';
        $base->exec($request);  
        echo 'statut mise à jour: Disponible';
    }
    if(isset($_GET['oqp']))
    {
        $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root');//non dispo
        $mlle=$_GET['matricule'];
        $request='UPDATE test SET statut="Non Disponible"  WHERE  statut="Disponible"';
        $base->exec($request);
        echo 'statut mise à jour:Non disponible';      
    }  
?>  
<style>
input.truc {
    width: 358px;
    border: 2px solid #fdfdfd;
    color: #000000;
    padding: 20px;
    margin-bottom: -13px;
    background-color: inherit;
}
::placeholder {
    color:white;
    font-size:20px
}
</style>
</div>
</body>
</html>



