<?php
	session_start(); 
	//Unset the variables stored in session
	//unset($_SESSION['usr']);
	//$_SESSION['usr'] = '12210290129013';
    session_destroy();
	header('Location:login_display.php?msg=logout');
?>