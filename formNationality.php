<?php 
include "header.php";
$action=$_GET['action'];//soit Ajouter soit Modifier

if($action == "Modifier"){
    include "connexionPDO.php";
    $num=$_GET['num'];
    //sql=>req
    $sql=$bdd->prepare("SELECT * FROM nationalite where num= :num");
    $sql->bindParam(':num', $num);
    $sql->setFetchMode(PDO::FETCH_OBJ);
    $sql->execute();
    $aNationality=$sql->fetch();
}


?>

<div class="container mt-5">
    <div class="pt-3">
        <h2 class="pt-3 text-center"> <?php echo $action ?> une nationalité</h2>
        <form action="valideFormNationality.php?action=<?php echo $action ?>" method="post" class="col-md-6 offset-md-3 border border-secondary p-3 rounded">
            <div class="form-group">
                <label for="libelle"> Libellé</label>
                <input type="text" class="form-control" id="libelle" placeholder="Saisir le libellé" name="libelle" value="<?php if($action == "Modifier"){echo $aNationality->libelle;}?>">
            </div>
            <input type="hidden" id="num" name="num" value="<?php if($action == "Modifier"){echo $aNationality->num;}?>">
            <div class="row">
                <div class="col"> <a href="listNationality.php" class="btn btn-warning btn-block"> Revenir a la liste </a></div>
                <div class="col"> <button type="submit" class="btn btn-success btn-block"> <?php echo $action ?> </button></div>
            </div>
        </form>
    </div>
</div>

<?php include "footer.php";?>
