<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
 header("Location: login_display.php");
} 
?>
<html>
<head>
<title></title>
</head>
<body>
<h1>Welcome to first page of my webosite</h1><br><br>
<h2><a href="content_display1.php">my second page</a></h2>
<p> <?php echo "The session ID is ".$_SESSION['usr'];?></p>
<h2><a href="logout.php">Logout</a></h2>
<center>

<br/>
</center>
</body>
</html>