<?php 
include "header.php";
include "connexionPDO.php";
$libelle=$_POST['libelle']; // je recupere le libellé du formulaire

//sql=>req
$sql=$bdd->prepare("insert into nationalite(libelle) values(:libelle)");
$sql->bindParam(':libelle', $libelle);
$nb=$sql->execute();

echo '<div class="container mt-5 pt-3">';
if($nb==1){
    echo '<div class="alert alert-success" role="alert">La nationalité a été ajoutée</div>' ;
}else{
    echo '<div class="alert alert-denger" role="alert">La nationalité n\'a pas été ajoutée</div>' ;
}
?>

<a href="listNationality.php" class="btn btn-primary"> Revenir à la liste des nationalités</a>
    
</div>

<?php include "footer.php";?>
