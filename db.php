<?php

$requested_airport = $_GET["icao"];
// 
// var_dump($_GET);
//
// echo $requested_airport . "\n";

$json  = file_get_contents("db.json");
$array = json_decode( $json, true );

echo $array[$requested_airport];

?>
