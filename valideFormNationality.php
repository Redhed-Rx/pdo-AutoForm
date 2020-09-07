<?php 
include "header.php";
include "connexionPDO.php";
$libelle=$_POST['libelle']; // je recupere le libellé du formulaire
$num=$_POST['num']; // je recupere le libellé du formulaire
$action=$_GET['action'];

if($action == "Modifier"){
    $sql=$bdd->prepare("update nationalite set libelle = :libelle where num = :num");
    $sql->bindParam(':libelle', $libelle);
    $sql->bindParam(':num', $num);
}else{
    $sql=$bdd->prepare("insert into nationalite(libelle) values(:libelle)");
    $sql->bindParam(':libelle', $libelle);
}
$nb=$sql->execute();
$message= $action == "Modifier" ? "modifiée" : "ajoutée";//ifelse en une ligne


echo '<div class="container mt-5 pt-3">';
if($nb==1){
    echo '<div class="alert alert-success" role="alert">La nationalité a bien été '. $message .' </div>' ;
}else{
    echo '<div class="alert alert-denger" role="alert">La nationalité n\'a pas été '. $message .' </div>' ;
}
?>

<a href="listNationality.php" class="btn btn-primary"> Revenir à la liste des nationalités</a>
    
</div>

<?php include "footer.php";?>
