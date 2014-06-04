<?php include ('functions.php');
$latitude=$_GET['latitude'];
$longitude=$_GET['longitude'];
$device=$_GET['device'];


ejecutarSQLCommand("INSERT INTO  `coordinates` (
`latitude` ,
`longitude` ,
`device`
)
VALUES (
'$latitude' ,
'$longitude' ,
'$device')
;");

 ?>
