<?php

require_once("security.php");
require_once("RoleScolarite.php");
?>
<?php
$id=$_POST['id'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$age=$_POST['age'];
$adresse=$_POST['adresse'];

require_once("conn.php");
$ps=$pdo->prepare("UPDATE etudiants SET nomEtud=?,prenomEtud?,ageEtud=?,adresseEtud=? WHERE idEtud=?");
$params=array($prenom,$nom,$age,$adresse,$id);

$ps->execute($params);
header("location:etudiants.php");
?>