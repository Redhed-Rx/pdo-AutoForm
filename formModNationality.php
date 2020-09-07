<?php 
include "header.php";
include "connexionPDO.php";
$num=$_GET['num'];
//sql=>req
$sql=$bdd->prepare("SELECT * FROM nationalite where num= :num");
$sql->bindParam(':num', $num);
$sql->setFetchMode(PDO::FETCH_OBJ);
$sql->execute();
$aNationality=$sql->fetch();

var_dump($aNationality);

?>

<div class="container mt-5">
    <div class="pt-3">
        <h2 class="pt-3 text-center">Modifier une nationalité</h2>
        <form action="valideModNationality.php" method="post" class="col-md-6 offset-md-3 border border-secondary p-3 rounded">
            <div class="form-group">
                <label for="libelle"> Libellé</label>
                <input type="text" class="form-control" id="libelle" placeholder="Saisir le libellé" name="libelle" value="<?php echo $aNationality->libelle;?>">
            </div>
            <input type="hidden" id="num" name="num" value="<?php echo $aNationality->num; ?>">
            <div class="row">
                <div class="col"> <a href="listNationality.php" class="btn btn-warning btn-block"> Revenir a la liste </a></div>
                <div class="col"> <button type="submit" class="btn btn-success btn-block"> Modifier </button></div>
            </div>
        </form>
    </div>
</div>

<?php include "footer.php";?>
