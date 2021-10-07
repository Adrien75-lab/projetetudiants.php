<?php

require_once("security.php");
require_once("RoleScolarite.php");
?>
<?php
    $id=$_GET['id'];
    require_once("conn.php");
    $ps=$pdo->prepare("DELETE FROM etudiants WHERE idEtud=?");
    $params=array($id);
    $ps->execute($params);
    header("location:etudiants.php");

?>