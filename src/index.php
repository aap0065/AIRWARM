
<?php include 'head.html' ?>

<body>
    <?php include 'nav.html' ?>

    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">

          <div id="alertas">
              <h2>Alertas</h2>
              <div class="alerta_todo" id="AlertaPolem">
                  <div id="alerta">
                      Durante los próximos <b>tres</b> días hay una alerta por <b>asma</b> en <b>Burgos</b>.
                  </div>
                  <div id="div_close_icon">
                       <img class="close_icon" src="../images/close_icon.png" alt="Close icon">
                   </div>
               </div>
              <div class="alerta_todo" id="AlertaHongos">
                  <div id="alerta">
                      Durante los próximos <b>tres</b> días hay una alerta por <b>asma</b> en <b>Burgos</b>.
                  </div>
                  <div id="div_close_icon">
                      <img class="close_icon" src="../images/close_icon.png" alt="Close icon">
                  </div>
              </div>
          </div>

          <h2>Tendencia de la calidad del aire</h2>
          <div class="mapa">
              <select name="fecha" id="fecha">
                  <option value="hoy">Hoy</option>
                  <option value="cinco_dias">5 días</option>
              </select>

              <select name="tipoBusqueda" id="tipoBusqueda">
                  <option value="enfermedadesRespiratorias">Enfermedades Respiratorias</option>
              </select>

              <input id="seleccion_mapa" type="submit" value="Submit">
              <br>

              <div class="holds_the_iframe">
                <iframe id="mapa_iframe" width=100% height="550" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col1+from+1J5sOkifcHGF1TboV7ci9IgA91tvcXSiBzA6q0_8V&amp;viz=MAP&amp;h=false&amp;lat=40.4167754&amp;lng=-3.7037901999999576&amp;t=1&amp;z=6&amp;l=col1&amp;y=2&amp;tmplt=2&amp;hml=KML"></iframe>


              </div>
              
          </div>

      </div>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

<?php include 'foot.html' ?>
