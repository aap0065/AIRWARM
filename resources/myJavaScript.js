

$(document).ready(function(){
    

    $("#close_icon").click(function(){
        $(".alerta_todo").fadeOut("slow");
    });
    $("#seleccion_mapa").click(function () {

        $("#mapa_iframe").prop('src',"https://www.google.com/fusiontables/embedviz?q=select+col2+from+15AsY10kIrrTjIMMoSY2L-eAs9SFEy-HhudcaKA6L&viz=MAP&h=false&lat=40.4167754&lng=-3.7037901999999576&t=1&z=6&l=col2&y=2&tmplt=2&hml=GEOCODABLE");

        /* Previsión
         https://www.google.com/fusiontables/embedviz?q=select+col2+from+15AsY10kIrrTjIMMoSY2L-eAs9SFEy-HhudcaKA6L&viz=MAP&h=false&lat=40.4167754&lng=-3.7037901999999576&t=1&z=6&l=col2&y=2&tmplt=2&hml=GEOCODABLE
         */
        /** Normal
         * https://www.google.com/fusiontables/embedviz?q=select+col2+from+15AsY10kIrrTjIMMoSY2L-eAs9SFEy-HhudcaKA6L&viz=MAP&h=false&lat=40.4167754&lng=-3.7037901999999576&t=1&z=6&l=col2&y=2&tmplt=2&hml=GEOCODABLE
         */
    });


});
