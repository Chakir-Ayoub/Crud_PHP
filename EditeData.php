<?php  include('includes/header.php');?>
<?php require('includes/connexion.php');
$id =$_GET['id'];
$reqPr=$con->prepare("SELECT *FROM etudiant WHERE id=?");
$reqPr->execute([$id]);
$etudiant=$reqPr->fetch();

$nom=$etudiant['Nom'];
$prenom=$etudiant['Prenom'];
$age=$etudiant['Age'];
?>
<div class="container">
<form action="Edit.php?id=<?php echo $id; ?>" method="post">
<label for="nom">Nom</label>
<input type="text" name="nom" value="<?php echo $nom;?>" id="" placeholder="Donner le nom" class="form-control">

<label for="nom">Nom</label>
<input type="text" name="prenom" value="<?php echo $prenom;?>" id="" placeholder="Donner le prénom" class="form-control">


<label for="nom">Nom</label>
<input type="Number" name="age" value="<?php echo $age;?>" id="" placeholder="Donner l'age" class="form-control">
<div class="form-group">
     
</div>
<button type="submit" name="Modifier" class="btn btn-info ">Modifier</button>
<button type="submit" name="Annuler" class="btn btn-dark">Annuler</button>
</form>
</div>


<?php  include('includes/footer.php');?>