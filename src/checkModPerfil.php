<?php

if($_POST['emailmod']!=$_POST['emailmod_confirm']){
    header("Location: fracasoModificar.php");
    die();
}
if($_POST['passwordmod']!=$_POST['passwordmod_confirm']){
    header("Location: fracasoModificar.php");
    die();
}

header("Location: exitoModificar.php");
die();

?>