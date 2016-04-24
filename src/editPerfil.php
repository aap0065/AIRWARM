
<?php include 'head.html' ?>

<body>
<?php include 'navLogin.html' ?>
<div class="container">
    <div class="jumbotron">
        <h1> Modificar datos</h1>
        
        <form action="checkModPerfil.php" method="post">

            <p>
                <img src="images/blank-profile-picture.png" width="200" height="200">
                <br/>
                <input name="uploadedimg" type="file" />
                <br/>
            </p>
            
        <p>
            <label for="emailmodP" class="youmail" data-icon="e" >Nuevo email: </label>
            <input id="emailmod" name="emailmod" type="email" placeholder="tuemail@dominio.com"/>
        </p>

            <p>
                <label for="emailmodP_confirm" class="youmail" data-icon="e" >Confirmar nuevo email: </label>
                <input id="emailmod_confirm" name="emailmod_confirm" type="email" placeholder="tuemail@dominio.com"/>
            </p>

        <p>
            <label for="passwordact" class="youpasswd" data-icon="p">Contraseña actual: </label>
            <input id="passwordact" name="passwordact" type="password" placeholder="contraseña actual" />
        </p>
        <p>
            <label for="passwordmod" class="youpasswd" data-icon="p">Nueva contraseña: </label>
            <input id="passwordmod" name="passwordmod" type="password" placeholder="contraseña"/>
        </p>
        <p>
            <label for="passwordmod_confirm" class="youpasswd" data-icon="p">Confirmar nueva contraseña: </label>
            <input id="passwordmod_confirm" name="passwordmod_confirm" required="required" type="password" placeholder="contraseña"/>
            <br/>
        </p>
            
        <h2>Modificar enfermedades respiratorias</h2>
        <input type="checkbox" name="dias" value="l" checked="true" />Alergia al polen<br />
        <input type="checkbox" name="dias" value="m" />Alergia a los hongos ambientales<br />
        <input type="checkbox" name="dias" value="mm" checked="true"/>Asma<br />
        <input type="checkbox" name="dias" value="j" />Intoxicaci&oacuten por contaminaci&oacuten<br />
            
        <p class="signin button">
            <br/>
            <input type="submit" value="Confirmar"/>
        </p>
</form>
    </div>
</div>
</body>

<?php include 'foot.html' ?>