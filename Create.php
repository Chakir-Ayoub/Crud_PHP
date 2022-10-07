<?php require('includes/connexion.php');?>
<?php  include('includes/header.php');?>

<div class="container">
 <?php
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $age=$_POST['age'];

 if(empty($nom)||empty($prenom)||empty($age)){
        if(empty($nom)){
            echo '<div class="alert alert-warning"> nom est vide</div> ';
     }
      if(empty($prenom)){
        echo '<div class="alert alert-warning"> prenom est vide</div> ';
     }

     if(empty($age)){
        echo '<div class="alert alert-warning"> age est vide</div> ';
     }
  echo'<a href="javascript:self.history.back()">Precedent</a>';
 }
 else
 {
     $request="INSERT INTO etudiant(Nom,Prenom,Age) VALUES('$nom','$prenom','$age') ";
     $con->exec($request);
     header("Location:index.php");
 }
 ?>

</div>
<?php  include('includes/footer.php');?>