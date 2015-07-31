

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
$api_key = "&api_key=" . $config['apikey'];

$columnas_db = "the_geom";

$SQLQ = "DELETE%20FROM%20mapadepuntos" . $api_key;
$url = "http://" . $config['subdomain']. ".cartodb.com/api/v2/sql?q=" . $SQLQ ;

//posteo a la base de datos verificacion de captcha

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch);   
curl_close($ch);

?>




