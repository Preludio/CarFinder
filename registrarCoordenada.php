<?php include ('functions.php');
if (!empty($_GET['latitude'])&&!empty($_GET['latitude']))
{
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
}
 ?>
