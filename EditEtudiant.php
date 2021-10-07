<?php

require_once("security.php");
require_once("RoleScolarite.php");
?>
<?php
    $id=$_GET['id'];
    require_once("conn.php");
    $ps=$pdo->prepare("SELECT * FROM etudiants WHERE idEtud=?");
    $params=array($id);
    $ps->execute($params);
    $etudiant=$ps->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Projet php</title>
</head>
<body>
    <?php require_once("entete.php") ?>
    <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
        <div class="panel-heading">Modifier un Etudiant</div>
        <div class="panel-body">
            <form method="post" action="UpdateEtudiant.php">
                <div class="form-group">
                <label class="control-label">Id: <?php echo($etudiant['idEtud']) ?></label>
                <input type="hidden" name="id" value="<?php echo($etudiant['idEtud']) ?>" class="form-control" />
                </div>
                <div class="form-group">
                <label class="control-label">Nom:</label>
                <input type="text" name="nom"value="<?php echo($etudiant['nomEtud']) ?>" class="form-control" />
                </div>
                <div class="form-group">
                <label class="control-label">Age:</label>
                <input type="text" name="age" value="<?php echo($etudiant['ageEtud']) ?>" class="form-control" />
                </div>
                <div class="form-group">
                <label class="control-label">Adresse:</label>
                <input type="text" name="adresse" value="<?php echo($etudiant['adresseEtud']) ?>"class="form-control" />
                </div>
                <div>
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
        
        
</body>
</html>

