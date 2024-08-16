<?php
	try
	{
		$dsn ="mysql: dbname=sql10726132; host=sql10.freesqldatabase.com";
		$user = "sql10726132";
		$pswd = "8kdUmXhlxw";
		
		$conn = new PDO($dsn, $user, $pswd);
		
		$conn->query("USE sql10726132");
	}
	catch(PDOException $e){
		die("Error Connecting: ".$e->getMessage());
	}
?>