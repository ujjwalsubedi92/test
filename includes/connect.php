
<?php
session_start(); 
	


	
	
	
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "ooad";
	
	$con = mysql_pconnect($server,$user,$password);
	mysql_select_db($db,$con);
	
?>