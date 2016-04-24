
<?php include 'head.html' ?>

<body>

<head>

    <style type="text/css">
        #class_left {
            position: relative;
            width: 50%;
            float: left;
        }

        #map_canvas {
            position: relative;
            width: 50%;
            float: right;
        }
        #contenedor{
            height: 800px;
        }
    </style>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">
        var map;
        var latitud;
        var longitud;

        $(document).ready(function() {
            localizame(); /*Cuando cargue la página, cargamos nuestra posición*/
        });

        function localizame() {
            if (navigator.geolocation) { /* Si el navegador tiene geolocalizacion */
                navigator.geolocation.getCurrentPosition(coordenadas, errores);
            }else{
                alert('Tu navegador no soporta geolocalización.');
            }
        }

        function coordenadas(position) {
            latitud = position.coords.latitude; /*Guardamos nuestra latitud*/
            longitud = position.coords.longitude; /*Guardamos nuestra longitud*/
            cargarMapa();
        }

        function errores(err) {
            /*Controlamos los posibles errores */
            if (err.code == 0) {
                alert("Algo ha salido mal");
            }
            if (err.code == 1) {
                alert("Oops! No has aceptado compartir tu posición");
            }
            if (err.code == 2) {
                alert("Oops! No se puede obtener la posición actual");
            }
            if (err.code == 3) {
                alert("Hemos superado el tiempo de espera");
            }
        }

        function cargarMapa() {
            var latlon = new google.maps.LatLng(latitud,longitud); /* Creamos un punto con nuestras coordenadas */
            var myOptions = {
                zoom: 17,
                center: latlon, /* Definimos la posicion del mapa con el punto */
                mapTypeId: google.maps.MapTypeId.SATELLITE
            };/*Configuramos una serie de opciones como el zoom del mapa y el tipo.*/
             map = new google.maps.Map($("#map_canvas").get(0), myOptions); /*Creamos el mapa y lo situamos en su capa */

            var coorMarcador = new google.maps.LatLng(latitud,longitud); /*Un nuevo punto con nuestras coordenadas para el marcador (flecha) */

            var marcador = new google.maps.Marker({
                /*Creamos un marcador*/
                position: coorMarcador, /*Lo situamos en nuestro punto */
                map: map, /* Lo vinculamos a nuestro mapa */
                title: "¿Dónde estoy?"
            });
        }
    </script>
</head>

<?php include 'navLogin.html' ?>
<div class="container">
    <div id="contenedor" class="jumbotron">
        <div id="class_left">
            <h1> Perfil </h1>
            <br/>
            
            <p>
                <img src="images/blank-profile-picture.png" width="200" height="200">
                <br/>
            </p>
            
            <p>
                <label for="username" class="uname" data-icon="u">Nombre de usuario: </label>
                <input id="usernamePer" name="usernamePer" type="text" placeholder=nombreusuario />
            </p>
            <p>
                <label for="emailPer" class="youmail" data-icon="e" > Email: </label>
                <input id="emailPertext" name="emailPertext" type="email" placeholder="tuemail@dominio.com"/>
            </p>
            <p>
                <label for="passwordPer" class="youpasswd" data-icon="p">Contraseña: </label>
                <input id="passwordPertext" name="passwordPertext" type="password" placeholder="contraseña" />
            </p>

            <h3>Enfermedades respiratorias</h3>
            <input type="checkbox" name="polem" value="1" checked="true" />Alergia al polen<br />
            <input type="checkbox" name="hongos" value="1" />Alergia a los hongos ambientales<br />
            <input type="checkbox" name="asma" value="1" checked="true"/>Asma<br />
            <input type="checkbox" name="contam" value="1" />Intoxicación por contaminación <br />
            <br/>

            <p class="signin button">
                <input type="button" value="Modificar Perfil" onclick="location.href = 'editPerfil.php'" />
                <br/>
            </p>
        </div>
            <div id='map_canvas' align="right" style='width:380px; height:380px;'></div>
    </div>
</div>
</body>

<?php include 'foot.html' ?>