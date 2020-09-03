<?php
$hostname = 'host=localhost';
$username = 'root';
$pwd = '';
$db = 'biblioudemy';

try {
    $bdd = new PDO("mysql:$hostname;dbname=$db;charset=utf8",$username,$pwd);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //bdd => monPDO
} catch (PDOException $e) {
    echo $e->getMessage();
    $bdd = null;
}
?>