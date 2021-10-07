
<?php
require_once("security.php");
require_once("RoleScolarite.php");
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
        <div class="panel-heading">Saisie des Etudiants</div>
        <div class="panel-body">
            <form method="post" action="SaveEtudiant.php">
            <div class="form-group">
                <label class="control-label">Prenom:</label>
                <input type="text" name="prenom" class="form-control" />
                </div>
                <div class="form-group">
                <label class="control-label">Nom:</label>
                <input type="text" name="nom" class="form-control" />
                </div>
                <div class="form-group">
                <label class="control-label">Age:</label>
                <input type="text" name="age" class="form-control" />
                </div>
                <div class="form-group">
                <label class="control-label">Adresse:</label>
                <input type="text" name="adresse" class="form-control" />
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

