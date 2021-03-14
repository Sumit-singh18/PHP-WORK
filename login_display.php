<?php
session_start();
if(isset($_SESSION['usr']) && isset($_SESSION['pswd']))
{
    header('Location:content_display.php');
}
error_reporting(0);
if($_GET['msg']=="error")
{
?>
  <div style="padding:6px; background:#3D9970; color:#FFFFFF; 
  font-weight:bold; border:solid 1px #Ffffff; text-align:center;">Error!! Wrong username or password!!</div>
<?php
}
?>
<?php
if($_GET['msg']=="logout")
{
?>
 <div style="background:#3D9970; border:solid 1px #A0EB70; 
 color:#FFFFFF; text-align:center; font-weight:bold; 
 padding:4px;">Logged out successfully Btech!!</div>
<?php
}
?>
<html>
<head>
<title> PHP Login </title>
</head>
<body>
<center>
<form method="post" action="login_process.php">
<!-- in this example I link it with login.php to check the password & username -->
<table>
<tr><td>Username:</td><td><input type="text" name="usr"></td></tr>
<tr><td>Password:</td><td><input type="password" name="pswd"></td></tr>
<tr><td><input type="submit" name="login" value="Login"></td>
<td><input type="reset" name="reset" value="Reset"></td></tr>
</table>
</form>
</center>
</body>
</html>