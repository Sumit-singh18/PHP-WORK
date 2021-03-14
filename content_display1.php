<?php
session_start();
if(!isset($_SESSION["usr"]) || !isset($_SESSION["pswd"])){
 header("Location: login_display.php");
} 
?>

<html>
<head>
<title></title>
</head>
<body>
<h1>Welcome to second page of my webosite</h1><br><br>
<h2><a href="content_display.php">my first page</a></h2>
<p> <?php echo "The session ID is ".$_SESSION['usr'];?></p>



<center>
<h2><a href="logout.php">Logout</a></h2>
<br/>
</center>
</body>
</html>