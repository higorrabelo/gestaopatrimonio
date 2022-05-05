<?php

session_start();

if(isset($_SESSION['status']) && $_SESSION['status']!="OK"){
    header("Location: index.php?msg=ERRO");
}


?>