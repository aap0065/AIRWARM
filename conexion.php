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
                $mysqli->rollback();
                header('Location: loginFail.php');
            }

            $resultado = $mysqli->query('select idUsuario from usuarios where username = "'.$username.'"');
            $idUser = $resultado->fetch_all()[0][0];


            //////////////
            // ALERGIAS //
            //////////////

            //Para el polem
            if (isset($_POST['polem'])){
                $resultado = $mysqli->query('select idAlergia from alergias where Nombre = "polem"');
                $idPolem = $resultado->fetch_all()[0][0];

                $sql = 'insert into alergiausuario (idUsuario, idAlergia) VALUES("'.$idUser.'","'.$idPolem.'")';
                if ($mysqli->query($sql) === TRUE) {
                    echo "Alergia con exito.";
                } else {
                    $mysqli->rollback();
                    header('Location: loginFail.php');
                }
                $resultado->close();
            }

            //para los hongos
            if (isset($_POST['hongos'])){
                $resultado = $mysqli->query('select idAlergia from alergias where Nombre = "hongos"');
                $idHongos = $resultado->fetch_all()[0][0];

                $sql = 'insert into alergiausuario (idUsuario, idAlergia) VALUES("'.$idUser.'","'.$idHongos.'")';
                if ($mysqli->query($sql) === TRUE) {
                    echo "Alergia con exito.";
                } else {
                    $mysqli->rollback();
                    header('Location: loginFail.php');
                }
                $resultado->close();
            }

            //Asma
            if (isset($_POST['asma'])){
                $resultado = $mysqli->query('select idAlergia from alergias where Nombre = "asma"');
                $idAsma = $resultado->fetch_all()[0][0];

                $sql = 'insert into alergiausuario (idUsuario, idAlergia) VALUES("'.$idUser.'","'.$idAsma.'")';
                if ($mysqli->query($sql) === TRUE) {
                    echo "Alergia con exito.";
                } else {
                    $mysqli->rollback();
                    header('Location: loginFail.php');
                }
                $resultado->close();
            }

            //Contamina
            if(isset($_POST['contam'])){
                $resultado = $mysqli->query('select idAlergia from alergias where Nombre = "contaminacion"');
                $idCont = $resultado->fetch_all()[0][0];

                $sql = 'insert into alergiausuario (idUsuario, idAlergia) VALUES("'.$idUser.'","'.$idCont.'")';
                if ($mysqli->query($sql) === TRUE) {
                    echo "Alergia con exito.";
                } else {
                    $mysqli->rollback();
                    header('Location: loginFail.php');
                }
                $resultado->close();
            }
            header('Location: index.php');

        } else {
            header('Location: loginFail.php');
            $mysqli->rollback();
        }



        $mysqli->close();
    ?>
</body>
</html>