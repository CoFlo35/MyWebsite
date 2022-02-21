<?php
	session_start();
	$_SESSION["PageState"] = 1;
	//print ($_SESSION[PageState]);
	header("location:../index.php");
	exit();
?>