<html>
<head><title> Fetch records from table</title>
</head>
<body>
<?php
	// retreive the data from the table
	include("dbconnect.php");
	$query="select * from user_information";
	$result=mysqli_query($conn,$query);
	echo "<br>";
?>
	<table align = "center" border="1" cellspacing="1" cellpadding="10"> 
 <tr>
	<th>ID</th><th>User Name</th><th>Password</th><th>Time of entry</th>
</tr>
<?php
	while($row = mysqli_fetch_array($result))
	{
?>	<tr>
	<?php echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
	}
	mysqli_close($conn);
?>
</tr>
</body>
</html>
