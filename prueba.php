<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php

            $mysqli = new mysqli('localhost', 'root', '', 'airwarmbd');

            if ($mysqli->connect_error) {
                die('Error de Conexión ('.$mysqli->connect_errno.') '.$mysqli->connect_error);
            }


			//--------------------------------------Sentencias--------------------------------

			//-----------------Usuarios----------------
			//Crear nuevo usuario
			$mysqli->query("insert into usuarios values ('username','passwd','email');");
		    //Actualizar contraseña
			$mysqli->query("update usuarios set passwd='passwd' where username='nombreUsuario'");
			//Actualizar email
			$mysqli->query("update usuarios set email='email' where username='nombreUsuario'");
			
			//-----------------Alergias----------------
			//Usuario introduce nueva alergia
			
			// Ejecuta la sentencia SQL 
			$resultado = mysql_query($sentencia, $mysqli); 
			
            // Libera la memoria del resultado
            //mysql_free_result($resultado);

            // Cierra la conexión con la base de datos
            $mysqli->close();
		?>
    </body>
</html>