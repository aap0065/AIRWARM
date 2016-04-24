<?php include 'head.html' ?>

    <head>
        <meta charset="UTF-8">
        <script type="text/javascript">
            function mostrar() {
                //document.getElementById('ocultoHongos').style.display = 'block';
                if(document.getElementById('estornudos').checked || document.getElementById('rinitis').checked || document.getElementById('dificultad').checked || document.getElementById('pielSeca').checked){
                    document.getElementById('ocultoHongos').style.display = 'block';
                }else {
                    if (document.getElementById('pielHinchada').checked || document.getElementById('picazonOjos').checked || document.getElementById('picazonNariz').checked || document.getElementById('picazonGarganta').checked) {
                        document.getElementById('ocultoPolen').style.display = 'block';
                    } else {
                        document.getElementById('ocultoAsma').style.display = 'block';
                    }
                }

            }
        </script>
    </head>

<body>
    <?php include 'navLogin.html' ?>
    <div class="container">
        <div class="jumbotron">
            <h3>Seleccione sus síntomas:</h3>
            <br />
            <form name="form" action="" method="post">
                <table>
                    <tr>
                    <td width="250">
                <input type="checkbox" id="estornudos" value="l" />Estornudos</td>
                    <td><br />Intensidad:
                <SELECT name="selectEstornudos" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /> <br />
                    </td>
                    </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="tos" value="m" />Tos  </td>
                        <td> <br />Intensidad:
                <SELECT NAME="selectTos" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                        </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="lagrimeo" value="mm" />Lagrimeo </td>
                    <td> <br />Intensidad:
                <SELECT NAME="selectLagrimeo" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                    </td>
                    </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="obstruccion" value="j" />Obstrucción nasal </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectObstruccion" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                        </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="dificultad" value="j" />Dificultad para respirar </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectDificultad" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                            </td>
                        </tr>
                <tr>
                    <td>
                <input type="checkbox" id="sibilancias" value="j" />Sibilancias </td>
                    <td><br />Intensidad:
                <SELECT NAME="selectSibilancias" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                        </td>
                    </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="rinitis" value="j" />Rinitis </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectRinitis" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                            </td>
                        </tr>

                 <tr>
                     <td>
                <input type="checkbox" id="picazonOjos" value="j" />Picazón ojos </td>
                     <td><br />Intensidad:
                <SELECT NAME="selectPicazonOjos" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                         </td>
                     </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="picazonNariz" value="j" />Picazón nariz </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectPicazonNariz" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                            </td>
                        </tr>
                    <tr>
                        <td>
                <input type="checkbox" id="picazonGarganta" value="j" />Picazón garganta </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectPicazonGarganta" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                            </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="secrecionNasal" value="j" />Secreción nasal </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectSecrecionNasal" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                            </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="opresion" value="j" />Opresión de pecho </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectOpresion" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                            </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="pielSeca" value="j" />Piel seca o escamada </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectPielSeca" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                            </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="pielHinchada" value="j" />Piel hinchada debajo de los ojos </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectPielHinchada" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                            </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="disminucion" value="j" />Disminución del gusto y olfato </td>
                        <td><br />Intensidad:
                <SELECT NAME="selectDisminucion" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br /><br />
                    </td>
                    </tr>

                </table>

                <br />
                <p class="signin button">
                    <input type="button" onclick="mostrar()" value="Aceptar"/>
                </p>
            </form>

            <p>
            <div id='ocultoHongos' style='display:none;'>
                <br />
                <b>Enfermedad más probable: Alergia por Hongos Ambientales</b>
            </div>
            <div id='ocultoPolen' style='display:none;'>
                <br />
                <b>Enfermedad más probable: Alergia por Polen</b>
            </div>
            <div id='ocultoAsma' style='display:none;'>
                <br />
                <b>Enfermedad más probable: Asma</b>
            </div>
            </p>
        </div>
    </div>
</body>

<?php include 'foot.html' ?>