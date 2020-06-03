<?php

$requested_airport = $_GET["icao"];

$json  = '[{"var1":"9","var2":"16","var3":"16"},{"var1":"8","var2":"15","var3":"15"}]';
$array = json_decode( $json, true );

echo $array[$requested_airport];

?>
