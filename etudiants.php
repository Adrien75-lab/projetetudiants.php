<?php
    require_once("security.php");
?>

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
        
        <div class="col-md-6 col-xs-12 spacer">
        <div class="panel panel-info spacer">
            <div class="panel-heading">Liste des étudiants</div>
            <div class="panel-body">
            <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Etudiant</th>
                <th>Nom </th>
                <th>Prenom Etudiant </th>
                <th>Age Etudiant</th>
                <th>Adresse Etudiant</th>
            </tr>
        </thead>
        <tbody>
            <?php // Pour chaque étudiant il affiche la liste des étudiants
             while($et=$ps->fetch()){     ?>
                <tr>
                    <td><?php echo($et['idEtud']) ?></td>
                    <td><?php echo($et['nomEtud']) ?></td>
                    <td><?php echo($et['prenomEtud']) ?></td>
                    <td><?php echo($et['ageEtud']) ?></td>
                    <td><?php echo($et['adresseEtud']) ?></td>
                    <td><a href="EditEtudiant.php?id=<?php echo($et['idEtud']) ?>">Edit</a></td>
                    <td><a onclick="return confirm('Etes vous sure .. ?')" href="SupprimEtudiant.php?id=<?php echo($et['idEtud']) ?>">Supprimer</a></td>
                </tr>
            <?php
        }
            ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
    </div>
    
    </div>
</body>
</html>

