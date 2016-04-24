<?php include 'head.html' ?>

    <head>
        <meta charset="UTF-8">
        <script type="text/javascript">
            function mostrar() {
                //document.getElementById('ocultoHongos').style.display = 'block';
                if(document.getElementById('estornudos').checked || document.getElementById('rinitis').checked || document.getElementById('dificultad').checked || document.getElementById('pielSeca').checked){
                    document.getElementById('ocultoHongos').style.display = 'block';
                    document.getElementById('ocultoPolen').style.display = 'none';
                    document.getElementById('ocultoAsma').style.display = 'none';
                    document.getElementById('ocultoOtras').style.display = 'none';
                }else {
                    if (document.getElementById('pielHinchada').checked || document.getElementById('picazonOjos').checked || document.getElementById('picazonNariz').checked || document.getElementById('picazonGarganta').checked) {
                        document.getElementById('ocultoPolen').style.display = 'block';
                        document.getElementById('ocultoHongos').style.display = 'none';
                        document.getElementById('ocultoAsma').style.display = 'none';
                        document.getElementById('ocultoOtras').style.display = 'none';
                    } else {
                        if(document.getElementById('opresion').checked ){
                            document.getElementById('ocultoAsma').style.display = 'block';
                            document.getElementById('ocultoHongos').style.display = 'none';
                            document.getElementById('ocultoPolen').style.display = 'none';
                            document.getElementById('ocultoOtras').style.display = 'none';
                        }else{
                            document.getElementById('ocultoOtras').style.display = 'block';
                            document.getElementById('ocultoHongos').style.display = 'none';
                            document.getElementById('ocultoPolen').style.display = 'none';
                            document.getElementById('ocultoAsma').style.display = 'none';
                        }

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
                    <td width="250">Intensidad:
                <SELECT name="selectEstornudos" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                    </td>


                        <td>
                <input type="checkbox" id="tos" value="m" />Tos  </td>
                        <td>Intensidad:
                <SELECT NAME="selectTos" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                        </td>

                    <tr>
                        <td>
                <input type="checkbox" id="lagrimeo" value="mm" />Lagrimeo </td>
                    <td>Intensidad:
                <SELECT NAME="selectLagrimeo" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                    </td>



                        <td>
                <input type="checkbox" id="obstruccion" value="j" />Obstrucción nasal </td>
                        <td>Intensidad:
                <SELECT NAME="selectObstruccion" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                        </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="dificultad" value="j" />Dificultad para respirar </td>
                        <td>Intensidad:
                <SELECT NAME="selectDificultad" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                            </td>


                    <td>
                <input type="checkbox" id="sibilancias" value="j" />Sibilancias </td>
                    <td>Intensidad:
                <SELECT NAME="selectSibilancias" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                        </td>
                    </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="rinitis" value="j" />Rinitis </td>
                        <td>Intensidad:
                <SELECT NAME="selectRinitis" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                            </td>



                     <td>
                <input type="checkbox" id="picazonOjos" value="j" />Picazón ojos </td>
                     <td>Intensidad:
                <SELECT NAME="selectPicazonOjos" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                         </td>
                     </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="picazonNariz" value="j" />Picazón nariz </td>
                        <td>Intensidad:
                <SELECT NAME="selectPicazonNariz" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                            </td>

                        <td>
                <input type="checkbox" id="picazonGarganta" value="j" />Picazón garganta </td>
                        <td>Intensidad:
                <SELECT NAME="selectPicazonGarganta" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                            </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="secrecionNasal" value="j" />Secreción nasal </td>
                        <td>Intensidad:
                <SELECT NAME="selectSecrecionNasal" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                            </td>

                        <td>
                <input type="checkbox" id="opresion" value="j" />Opresión de pecho </td>
                        <td>Intensidad:
                <SELECT NAME="selectOpresion" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                            </td>
                        </tr>

                    <tr>
                        <td>
                <input type="checkbox" id="pielSeca" value="j" />Piel seca o escamada </td>
                        <td>Intensidad:
                <SELECT NAME="selectPielSeca" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
                            </td>

                        <td width="250">
                <input type="checkbox" id="pielHinchada" value="j" />Piel hinchada debajo de los ojos </td>
                        <td>Intensidad:
                <SELECT NAME="selectPielHinchada" SIZE="1">
                    <OPTION VALUE="r">1</OPTION>
                    <OPTION VALUE="g">2</OPTION>
                    <OPTION VALUE="b">3</OPTION>
                    <OPTION VALUE="b">4</OPTION>
                    <OPTION VALUE="b">5</OPTION>
                </SELECT> <br />
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

            <div id='ocultoOtras' style='display:none;'>
                <br />
                <b>Enfermedad más probable: Otras enfermedades respiratorias</b>
            </div>

            </p>
        </div>
    </div>
</body>

<?php include 'foot.html' ?>