<?php

$requested_airport = $_GET["icao"];
//
var_dump($_GET);
//
echo "airpt: ".$requested_airport . "\n";

$json  = file_get_contents("db.json");
$array = json_decode( $json, true );

$airport = $array[strtoupper($requested_airport)]

// var_dump($array[strtoupper($requested_airport)]);

?>

<html>
<head>
  <style>
    table,tr,th,td {
      border:1px solid black;
      border-collapse:collapse;
    }
    th {
      background-color:lightgrey;
    }
  </style>
</head>
  <table>
    <tr>
      <th>Header</th>
      <th>Response</th>
    </tr>
    <tr>
      <td>ICAO</td>
      <td><?php echo $airport["icao"]; ?></td>
    </tr>
    <tr>
      <td>IATA</td>
      <td><?php echo $airport["iata"]; ?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $airport["name"]; ?></td>
    </tr>
    <tr>
      <td>City</td>
      <td><?php echo $airport["city"]; ?></td>
    </tr>
    <tr>
      <td>State</td>
      <td><?php echo $airport["state"]; ?></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><?php echo $airport["country"]; ?></td>
    </tr>
    <tr>
      <td>Elevation</td>
      <td><?php echo $airport["elevation"]; ?></td>
    </tr>
    <tr>
      <td>lat</td>
      <td><?php echo $airport["lat"]; ?></td>
    </tr>
    <tr>
      <td>lon</td>
      <td><?php echo $airport["lon"]; ?></td>
    </tr>
    <tr>
      <td>TZ</td>
      <td><?php echo $airport["tz"]; ?></td>
    </tr>
  </table>

</html>
