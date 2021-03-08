
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="principale.css">
</head>
<body style="font-size: 50;">
<?php
class Personne 
{
    public $id;
    public $nom;
    public $prenom;
    public $type;
    public $mot_de_passe;

 public function __construct($id,$n,$p,$t,$psw)
{
    $this->id=$id;
    $this->nom=$n;
    $this->prenom=$p;
    $this->type=$t;
    $this->mot_de_passe=$psw;
}
}
$base=new PDO('mysql:HOST=localhost;dbname=lavage','root','root'); 
for ($i=1;$i<8;$i++)
{
    $reponse= $base->query('SELECT * FROM user WHERE id_user = '."$i");
    while ($donnees = $reponse->fetch())
    {   
        $id= $donnees['id_user']; 
        $nom = $donnees ['nom'];
        $prenom = $donnees ['prenom'];
        $type =$donnees ['id_type'];
        $mot_de_passe =$donnees ['password'];
        $pers=new Personne ($id,$nom,$prenom,$type,$mot_de_passe);
    }
if (isset($_POST['admin'])) 
    {
        if ($pers->nom == $_POST['nom'] && $pers->mot_de_passe == $_POST['mdp']) 
    {
            if($pers->type == 1){
            session_start ();
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['prenom']= $pers->prenom;
            $_SESSION['mot_de_passe'] = $_POST['mdp'];
            $_SESSION['id']= $pers->id;
        
            header ('location: home.php');
            }
            else 
            {
                echo 'Veuillez verifier vos identifants ou décocher la case administrateur';
            }
    }
    }
else
    {
        if ($pers->nom == $_POST['nom'] && $pers->mot_de_passe == $_POST['mdp']) 
        {
        if($pers->type == 2){
        session_start ();
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom']= $pers->prenom;
        $_SESSION['id']= $pers->$id;
        $_SESSION['mot_de_passe'] = $_POST['mdp'];
            
        header ('location: acceuil.php');
        }
        else 
        {
        echo 'Veuillez verifier vos identifants ou cocher la case administrateur!';
        } 
        }             
    }
}
?>
<br><br><br><p>Identifiant incorrect</p><br>
<a href="connexion.php">Revenir à la page d'acceuil!</a>

</body>
</html>
