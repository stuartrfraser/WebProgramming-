<?php

$db_host = "localhost";
$db_username = "srf32";
$db_password = "abcsrf32354";
$db_name = "twitteraccounts";

$db = @mysql_connect("$db_host", "$db_username", "$db_passowrd");
 if(!$db) { 
 	die ("Could not connect to mySQL: " . mysql_error());
 	}
 	
//@mysql_select_db("$db_name") or die("No database");

//echo "we have connected to a database";

?>
