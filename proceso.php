

<?php session_start();
/**
 * Post de datos a la base de datos
 *
 * @author      Nicolas Lound <nicolas.lound@gmail.com>, Vladimir Martemianov <vmartemianov@gmail.com>
 * @license     MIT
 * @version     0.1
 *
 */

//conección a cartoDB
require_once 'libs/cartodb.class.php';
require_once 'libs/cartodb.config.php';

$config = getConfig();
$cartodb = new CartoDBClient($config);

if (!$cartodb->authorized) {
  error_log("uauth");
}

// get y armado de variables
$geom = "ST_SetSRID(ST_MakePoint(" . $_POST['latlng_data'] . "),4326)";
$api_key = "&api_key=" . $config['apikey'];

$columnas_db = "the_geom";
$campos_post = $geom;  

$SQLQ = "INSERT%20INTO%20" . $config['table'] . "%20(". $columnas_db .")%20VALUES%20(" . $campos_post .")" . $api_key;
$url = "http://" . $config['subdomain']. ".cartodb.com/api/v2/sql?q=" . $SQLQ ;

//posteo a la base de datos verificacion de captcha
echo "Escribiendo...";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch);   
curl_close($ch);

?>




