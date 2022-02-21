<?php
	session_start();
	$_SESSION["PageState"] = 3;
	header("location:../index.php");
	exit();
?>