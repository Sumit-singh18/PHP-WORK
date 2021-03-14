<?php
session_start();
 if($_REQUEST['usr']=="ABC" && $_REQUEST['pswd']=="123"){
    $_SESSION['usr'] = "ABC";
    $_SESSION['pswd'] = "123";
    header('Location: content_display.php');
    session_write_close();
 }
 
 else {
   //If Login failed redirect to login page
    
      header("Location: login_display.php?msg=error");
      exit();
}
?>