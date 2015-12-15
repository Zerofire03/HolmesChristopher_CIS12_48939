<?php
//This file contains the database access information.
//This file also establishes a connection to MySQL,
//selects the databse, and sets the encoding.

//Set the database access information as constants:
DEFINE ('DB_USER', 'php_connector');
DEFINE ('DB_PASSWORD', 'Bl!zzard');
DEFINE ('DB_HOST', '192.168.0.30');
DEFINE ('DB_NAME', 'ecommerce');

//Make the connection
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' .mysqli_connect_error());

//Set the encoding
mysqli_set_charset($dbc, 'utf8');

?>
