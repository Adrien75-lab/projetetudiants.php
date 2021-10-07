<?php

require_once("conn.php");
$req="SELECT * FROM etudiants";
$ps=$pdo->prepare($req);
$ps->execute();

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
        <div class="panel-heading">Authentification
        <div class="panel-body">
            <form method="post" action="Authentifier.php">
            <div class="form-group">
                <label class="control-label">Login:</label>
                <input type="text" name="username" class="form-control" />
                </div>
                <div class="form-group">
                <label class="control-label">Pass:</label>
                <input type="password" name="password" class="form-control" />
                </div>
                <div class="form-group">
                    <button type="submit">Envoyer</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
    

        
        
</body>
</html>

