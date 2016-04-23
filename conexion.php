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
        }


        //--------------------------------------Sentencias--------------------------------
        //REGISTRO DE USUARIOS
        $username = $_POST['usernamesignup'];
        $passwd = $_POST['passwordsignup'];
        $passwd2 = $_POST['passwordsignup_confirm'];
        $email = $_POST['emailsignup'];



        //Comprobamos que las contraseñas sean iguales.
        if($passwd == $passwd2){
            $sql = 'insert into usuarios (username, password, email) VALUES("'.$username.'" ,"'.$passwd.'" ,"'.$email.'")';
            if ($mysqli->query($sql) === TRUE) {
                echo "Nuevo usuario introducido con exito.";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
        } else {
            echo "Error, las contraseñas no coinciden";
        }

        if()
        $polem = $_POST['polem'];
        $hongos = $_POST['hongos'];
        $asma = $_POST['asma'];
        $contam = $_POST['contam'];

        echo $polem;


        $mysqli->close();
    ?>
</body>
</html>