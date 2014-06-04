<?php 
header( 'Content-Type: text/html;charset=utf-8' );

function ejecutarSQLCommand($commando){
 
	$mysqli = new mysqli(
	$_ENV['OPENSHIFT_MYSQL_DB_HOST'],
	$_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
	$_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
	$_ENV['OPENSHIFT_APP_NAME'], // By default, app name == db name
	$_ENV['OPENSHIFT_MYSQL_DB_PORT'],
	$_ENV['OPENSHIFT_MYSQL_DB_SOCKET']
	);  
	
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ( $mysqli->multi_query($commando)) {
     if ($resultset = $mysqli->store_result()) {
    	while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {
    		
    	}
    	$resultset->free();
     }
    
   
}



$mysqli->close();
}

function getSQLResultSet($commando){
 
	$mysqli = new mysqli(
	$_ENV['OPENSHIFT_MYSQL_DB_HOST'],
	$_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
	$_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
	$_ENV['OPENSHIFT_APP_NAME'], // By default, app name == db name
	$_ENV['OPENSHIFT_MYSQL_DB_PORT'],
	$_ENV['OPENSHIFT_MYSQL_DB_SOCKET']
	);  
	
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ( $mysqli->multi_query($commando)) {
	return $mysqli->store_result();
	
     
    
   
}



$mysqli->close();
}


?>
