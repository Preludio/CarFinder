<?php
include('functions.php'); 
$cc=$_GET['cc'];
if ($resultset = getSQLResultSet("SELECT * 
FROM  `coordinates` ORDER BY id DESC LIMIT 1")) {
	
    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);
    	
    	}
    	
   }
   
?>
