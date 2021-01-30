<?php
require("connexion.php");

$request = $conn->prepare("DELETE FROM `testdb` WHERE webmaniadb=?");
$request->execute(array($_GET['ID']));
header('PHPNATIVE:affichage.php');

?>