<?php include 'head.html' ?>

<body>
<?php include 'nav.html' ?>
<div class="container">
    <div class="jumbotron">
        <form <!--action="conexion.php"--> method="post">
            <h1> Registrarse </h1>
            <p>
                <label for="usernamesignup" class="uname" data-icon="u">Nombre de usuario</label>
                <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder=nombreusuario />
            </p>
            <p>
                <label for="emailsignup" class="youmail" data-icon="e" > Email</label>
                <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="tuemail@loquesea.com"/>
            </p>
            <p>
                <label for="passwordsignup" class="youpasswd" data-icon="p">Contraseña</label>
                <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="contraseña" />
            </p>
            <p>
                <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Repita su contraseña </label>
                <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="contraseña"/>
            </p>
            <h3>Seleccione sus enfermedades respiratorias</h3>
            <input type="checkbox" name="polem" value="1" />Alergia al polen<br />
            <input type="checkbox" name="hongos" value="1" />Alergia a los hongos ambientales<br />
            <input type="checkbox" name="asma" value="1" />Asma<br />
            <input type="checkbox" name="contam" value="1" />Intoxicación por contaminación <br />
            <p class="signin button">
                <a href="indexLog.php"><input type="submit" value="Aceptar" /></a>
            </p>
            </form>
    </div>
</div>
</body>

<?php include 'foot.html' ?>