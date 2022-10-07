<?php require('includes/connexion.php');?>
<?php  include('includes/header.php');?>
 
<div class="container">
    <div class="row">
        <div class="col-9">
             <h3>Liste des etudiants</h3>
        </div>
   <div class="col-3">
       <a href="createData.php" class="btn btn-secondary">Ajouter</a>
   </div>

    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>AGE</th>
            <th>ACTION</th>
        </thead>

        <tbody>
            <?php
            $reqPre=$con->prepare("SELECT * FROM etudiant");
            $reqPre->execute();
            $etudiant= $reqPre->fetchAll();
            foreach($etudiant as $etudiant){
           echo'<tr><td>'.$etudiant['Id'].'</td>'.'<td>'.$etudiant['Nom'].'</td>'.'<td>'.$etudiant['Prenom'].'</td>'.'<td>'.$etudiant['Age'].'</td>';
           ?>
           <td>
            <a href="EditeData.php?id=<?php echo $etudiant['Id']; ?>" class="btn btn-sm btn-success">Edit</a>
            <a href="delete.php?id=<?php echo $etudiant['Id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Confirmer la supperition');">Delete</a> 
           </td>

        </tr>
            <?php
            }
            ?>
        
        </tbody>
    </table>

    </div>
    
</div>
<?php  include('includes/footer.php');?>