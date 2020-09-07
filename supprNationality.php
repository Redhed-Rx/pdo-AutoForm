<?php session_start();
include "connexionPDO.php";
$num=$_GET['num'];

$sql=$bdd->prepare("delete from nationalite where num = :num");
$sql->bindParam(':num', $num);
$nb=$sql->execute();

//echo '<div class="container mt-5 pt-3">';
//echo '<div class="row"> <div class="col mt-5">';

if($nb==1){
    $_SESSION['message']=['success'=>"La nationalité a bien été supprimée "];
}else{
    $_SESSION['message']=['danger'=>"Petit problème : La nationalité n'a pas été supprimée "];
}
header('location: listNationality.php');
exit();
?>
</div>
</div>
<!--<a href="listNationality.php" class="btn btn-primary"> Revenir à la liste des nationalités</a>-->
<!--</div>-->
<!--<-->
<!--<?php // include "footer.php";?>-->
