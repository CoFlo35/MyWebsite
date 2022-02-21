<?php
	session_start();
	$_SESSION["PageState"] = 5;
	//print ($_SESSION[PageState]);
	header("location:../index.php");
	exit();
?>