<?php 
include "header.php";
include "connexionPDO.php";
//sql=>req
$sql=$bdd->prepare("SELECT * FROM nationalite");
$sql->setFetchMode(PDO::FETCH_OBJ);
$sql->execute();

$allNationality=$sql->fetchAll();
?>
<div class="container mt-5">
    <div class="container pt-3">
        <h2>Liste des nationalités</h2>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Libellé</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($allNationality as $nationality){
                echo "<tr>";
                echo "<td>$nationality->num</td>";
                echo "<td>$nationality->libelle</td>";
                echo "<td></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</div>

<?php include "footer.php";?>
