<?php

$requested_airport = $_GET["icao"];
//
var_dump($_GET);
//
echo "airpt: ".$requested_airport . "\n";

$json  = file_get_contents("db.json");
$array = json_decode( $json, true );

var_dump($array);

?>
