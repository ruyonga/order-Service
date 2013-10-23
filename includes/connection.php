<?php
require("constants.php");
 $connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	if(!$connection)
		die("Coundn't connect to server");
		$connection = mysql_select_db(DB_NAME, $connection) 
		or die("Database selection error". mysql_error());
	
	
?>