<?php 
include "header.php";
include "connexionPDO.php";
$libelle=$_POST['libelle']; // je recupere le libellé du formulaire
$num=$_POST['num']; // je recupere le libellé du formulaire

//sql=>req
$sql=$bdd->prepare("update nationalite set libelle = :libelle where num = :num");
$sql->bindParam(':libelle', $libelle);
$sql->bindParam(':num', $num);
$nb=$sql->execute();

echo '<div class="container mt-5 pt-3">';
if($nb==1){
    echo '<div class="alert alert-success" role="alert">La nationalité a bien été modifiée</div>' ;
}else{
    echo '<div class="alert alert-denger" role="alert">La nationalité n\'a pas été modifiée</div>' ;
}
?>

<a href="listNationality.php" class="btn btn-primary"> Revenir à la liste des nationalités</a>
    
</div>

<?php include "footer.php";?>
