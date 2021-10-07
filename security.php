
<?php

    session_start();
    // La fonction isset permet de savoir si la variable existe ou non
    if(!(isset($_SESSION['PROFILE']))){
        header("location:Login.php");
    }

?>