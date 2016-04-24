
<?php include 'head.html' ?>

<body>
<?php include 'nav.html' ?>
<div class="container">
    <div class="jumbotron">
        <h1> Cambiar datos</h1>
        <p>
            <label for="emailsignup" class="youmail" data-icon="e" > Nuevo email</label>
            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="tuemail@loquesea.com"/>
        </p>
        <p>
            <label for="passwordsignup" class="youpasswd" data-icon="p">Contraseña actual</label>
            <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="contraseña" />
        </p>
        <p>
            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Nueva contraseña </label>
            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="contraseña"/>
        </p>
        <p>
            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirmar nueva contraseña </label>
            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="contraseña"/>
        </p>
        <h3>Cambiar enfermedades respiratorias</h3>
        <input type="checkbox" name="dias" value="l" />Alergia al polen<br />
        <input type="checkbox" name="dias" value="m" />Alergia a los hongos ambientales<br />
        <input type="checkbox" name="dias" value="mm" />Asma<br />
        <input type="checkbox" name="dias" value="j" />Intoxicaci&oacuten por contaminaci&oacuten<br />
        <p class="signin button">
            <input type="submit" value="Aceptar"/>
        </p>

    </div>
</div>
</body>

<?php include 'foot.html' ?>