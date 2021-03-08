<?php require'entete.php'?>
<div class="container" style="width: 253px; font-size: 17px;"> 
<h2>Liste des Laveurs</h2>
    <table border="1">
        <tr>
            <th>Mle</th>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
    <?php 
    $base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
    $reponse= $base->query('SELECT * FROM user as u WHERE id_type LIKE 2');
    while ($donnees = $reponse->fetch())
    { 
        $id= $donnees['id_user'];
        $nom= $donnees['nom'];
        $prenom= $donnees ['prenom'];  
        ?>
        <tr>
            <td>000<?php echo $id; ?></td>
            <td><?php echo $nom; ?></td>
            <td><?php echo $prenom; ?></td>
        </tr>    
    <?php } ?>
    </table>
</div> 
<div class="container" style="width: 802px;">
<h2>Ajouter un nouveau Laveur</h2>
    <form action="" method="get">
    <input type="text" name="nom" placeholder="Nom" class="blanc" required><br>
    <input type="text" name="prenom" placeholder="Prénom" class="blanc" required><br>
    <input type="password" name="psw" placeholder="Mot de passe" class="blanc" required><br>
    <input type="password" name="psw1" placeholder="Confirmer le mot de passe" class="blanc" required><br>
    <button type="submit" name="valider" class="close" style="
    font-size: 21px;
">Inscrire</button>
    </form>
<?php
if(isset($_GET['valider'])){
    if($_GET['psw']==$_GET['psw1'])
    {
        $name=$_GET['nom'];
        $firstname=$_GET['prenom'];
        $psw=$_GET['psw'];
        $insert='INSERT INTO user(nom,prenom,id_type,password) VALUES( :un,:deux,2,:trois)';
        $insertion=$base->prepare($insert);
        $insertion->execute(array(
            'un'=> $name,
            'deux'=> $firstname,
            'trois'=> $psw
        ));
    }
    else
    {
        echo "Veuillez entrer le même mot de passe!";
    }
}
?>
<style>
    input.blanc{
    width: 358px;
    border: 1px solid #fdfdfd;
    color: #000000;
    padding: 20px;
    margin-bottom:5px;
    background-color:inherit;
  }
  ::placeholder{
      color:white;
      font-size: 21px;
  }
  .close:hover, .close:focus {
  box-shadow: inset 4em 0 0 0 var(--hover), inset -4em 0 0 0 var(--hover);
  }
  .close {
    --color: #e91e63;
    --hover: #9c27b0;
  }
  button {
  color: var(--color);
  transition: 0.25s;
    }
    button:hover, button:focus {
    border-color: var(--hover);
    color: #fff;
    }
    button {
  background: none;
  border: 2px solid;
  font-size: 21px;
  font: inherit;
  line-height: 1;
  margin: 0.5em;
  padding: 1em 2em;
}
</style>
</div>     
</html>
</body>
</html>
