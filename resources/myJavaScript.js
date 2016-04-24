

$(document).ready(function(){

    var $actual_map = "hoy";
    var $numAlertas = "2"

    $(".close_icon").click(function(){
        $(this).parent().parent().fadeOut("slow");
        $numAlertas = $numAlertas - 1;
        if ($numAlertas==0){
            $("#alertas").fadeOut("slow");
        }
    });
    $("#seleccion_mapa").click(function () {
        var $nextValue = document.getElementById("fecha").value;
        if($nextValue!=$actual_map) {
            if($actual_map == "hoy") {
                $("#mapa_iframe").prop('src', "https://www.google.com/fusiontables/embedviz?q=select+col2+from+15AsY10kIrrTjIMMoSY2L-eAs9SFEy-HhudcaKA6L&viz=MAP&h=false&lat=40.4167754&lng=-3.7037901999999576&t=1&z=6&l=col2&y=2&tmplt=2&hml=GEOCODABLE");
                $actual_map = "cinco_dias";
            }
            else {
                $("#mapa_iframe").prop('src', "https://www.google.com/fusiontables/embedviz?q=select+col2+from+15AsY10kIrrTjIMMoSY2L-eAs9SFEy-HhudcaKA6L&viz=MAP&h=false&lat=40.4167754&lng=-3.7037901999999576&t=1&z=6&l=col2&y=2&tmplt=2&hml=GEOCODABLE");
                $actual_map = "hoy";
            }
        }

        /* Previsión
         https://www.google.com/fusiontables/embedviz?q=select+col2+from+15AsY10kIrrTjIMMoSY2L-eAs9SFEy-HhudcaKA6L&viz=MAP&h=false&lat=38.59158034500299&lng=-0.11378515625006003&t=1&z=5&l=col2&y=2&tmplt=2&hml=GEOCODABLE
         */
        /** Normal
         * https://www.google.com/fusiontables/embedviz?q=select+col2+from+15AsY10kIrrTjIMMoSY2L-eAs9SFEy-HhudcaKA6L&viz=MAP&h=false&lat=40.4167754&lng=-3.7037901999999576&t=1&z=6&l=col2&y=2&tmplt=2&hml=GEOCODABLE
         */
    });



    });
