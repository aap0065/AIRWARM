<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
/**
 * @var Mysqli $mysqli
 */
$mysqli = new mysqli('localhost', 'root', '', 'airwarm');

if ($mysqli->connect_error) {
    die('Error de Conexión ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
    $mysqli->rollback();
    header('Location: loginFail.php');
}


//--------------------------------------Sentencias--------------------------------
//REGISTRO DE USUARIOS
$username = $_POST['username'];
$passwd = $_POST['password'];

$resultado = $mysqli->query('select password from usuarios where username ="'.$username.'"');
$pass = $resultado->fetch_all()[0][0];

var_dump($resultado);
echo "usuario".$username;
echo "hola".$passwd;
echo "adios".$pass;
if($pass === $passwd){
    header('Location: informacion.php');
} else {

}




$mysqli->close();
?>
</body>
</html>