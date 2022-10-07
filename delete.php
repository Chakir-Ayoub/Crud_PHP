<?php require('includes/connexion.php');

$id =$_GET['id'];

$sql="DELETE FROM etudiant WHERE Id=$id";
$con->exec($sql);

//header("Location:index.php");
?>
