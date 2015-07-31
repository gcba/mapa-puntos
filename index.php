<?php session_start();?>

<!DOCTYPE HTML>
<html lang="es">
<head>    
    <title>Mapa Puntos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!--[if lt IE 9]>
        <script src="libs/html5shiv.js"></script>
    <![endif]-->
    <script type="text/javascript" src="libs/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.min.css">
    <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/themes/css/cartodb.css" />
    <script src="http://libs.cartocdn.com/cartodb.js/v3/cartodb.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v2/themes/css/cartodb.ie.css" />
    <![endif]-->
    <link rel="icon" href="favicon.ico"/>
</head>

<body>
<div id="contenidos">
    <div id="barraNav">
        <div class="izquierda logo-gcba"><a href="http://www.buenosaires.gob.ar/" target="_blank">Buenos Aires Ciudad</a></div>
        <div class="derecha claim">En todo estás vos.</div>
    </div>


    <div id="map">
        <div id="loader">cargando</div>
    </div>


    <div id="menu">
        <a href="#" class="btnRedondo" id="borraPuntos"><i class="material-icons">delete</i></a>
        <a href="#" class="btnRedondo" id="agregaPunto"><i class="material-icons">add</i></a>
    </div>
</div>




<!--  alta con captcha 
    <div id="captchaDiv">
        <img src="captcha.php" id="captcha" />
        <span onclick="javascript:nuevoCaptcha()" id="change-image">
            Recargar imagen
        </span>

    </div><br>
    <input type="text" name="captcha" id="captcha_txt"  class="form-control" autocomplete="off"/><br />
    <div class="btn btn-default anterior" onclick="siguienteFormulario('#paso3','#paso4')"> Anterior </div>
    <span class="aviso"> Por favor verifique que el código esté bien ingresado </span>
--> 

</body>

<script>
var url2vis = "https://gcba.cartodb.com/api/v2/viz/78f24052-3478-11e5-961d-0e0c41326911/viz.json";
var capas;

window.onload = function() {

    cartodb.createVis('map', url2vis)
        .done(function(vis, layers) {
            $("#loader").remove();
            capas = layers;
        });
  
}

</script>
    <script type="text/javascript" src="js/funciones.js"></script>
</html>
