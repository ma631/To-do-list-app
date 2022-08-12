<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$database_name="task_database";
	$conn = new mysqli($hostname, $username, $password,$database_name);
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
	else{
		echo "connection is successful";
	}
?>