<?php

require_once("security.php");
require_once("RoleScolarite.php");
?>
<?php

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$age=$_POST['age'];
$adresse=$_POST['adresse'];

require_once("conn.php");
$ps=$pdo->prepare("INSERT INTO etudiants(nomEtud,prenomEtud,ageEtud,adresseEtud) VALUES (?,?,?,?)");
$params=array($prenom,$nom,$age,$adresse);
$ps->execute($params);
header("location:etudiants.php");
?>