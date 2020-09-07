<?php 
include "header.php";
include "connexionPDO.php";
//sql=>req
$sql=$bdd->prepare("SELECT n.num, n.libelle, c.libelle from nationalite n, contient c where n.numContinent = c.num ");
$sql->setFetchMode(PDO::FETCH_OBJ);
$sql->execute();
$allNationality=$sql->fetchAll();

if(!empty($_SESSION['message'])){
    $mesMessages = $_SESSION['message'];
    foreach($mesMessages as $key=>$message){
        echo '<div class="container pt-5">
            <div class="alert alert-'.$key.' alert-dismissible fade show" role="alert">'.$message.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
              </div>';
    }
    $_SESSION['message']=[];
}

?>
<div class="container mt-5">
    <div class="row pt-3">
        <div class="col-9"><h2>Liste des nationalités</h2></div>
        <div class="col-3"><a href="formNationality.php?action=Ajouter" class="btn btn-success"><i class="fas fa-plus-circle"></i> Creer une nationalité</a></div>
        
    </div>
    <table class="table">
        <thead class="thead-light" >
            <tr class="d-flex">
                <th scope="col" class="col-md-2">Numéro</th>
                <th scope="col" class="col-md-5">Libellé</th>
                <th scope="col" class="col-md-3">continent</th>
                <th scope="col" class="col-md-2">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($allNationality as $nationality){
                echo "<tr class=\"d-flex\">";
                echo "<td class=\"col-md-2\">$nationality->num</td>";
                echo "<td class=\"col-md-8\">$nationality->libelle</td>";
                echo "<td class=\"col-md-8\">$nationality->libelle</td>";
                echo "<td class=\"col-md-2\">
                    <a href=\"formNationality.php?action=Modifier&num=$nationality->num\" class=\"btn btn-info\"><i class=\"fas fa-pen\"></i></a>
                    <a href='#modalSuppr' data-toggle=\"modal\" data-message='Voulez vous supprimer cette nationalité' data-suppr='supprNationality.php?num=$nationality->num' class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></a>
                </td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
    
</div>

<?php include "footer.php";?>
