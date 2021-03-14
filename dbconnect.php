<?php
// Database connectivity first page
	$host="localhost";
	$user="root";
	$pwd="";
	$db= "btech3_demo";
	
	$conn=mysqli_connect($host, $user,$pwd) or 
	die("connection is failed "); //you can also use exit function instead of die.
	//echo "connection is successful<br>";
	mysqli_select_db($conn, $db) or die("Database not connect");
	//echo "Database connected successful";
	?>
