<?php require('includes/connexion.php');

$id =$_GET['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];

if(isset($_POST['Modifier']))
{
  $sql="UPDATE etudiant SET Nom='$nom',Prenom='$prenom',Age='$age' WHERE Id=$id";

  $con->exec($sql);
     header("Location:index.php");  
}
if(isset($_POST['Annuler'])){
    header("Location:index.php");
}

?>