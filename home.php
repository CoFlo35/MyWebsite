<?php
	session_start();
	$_SESSION["PageState"] = 0;
	header("location:../index.php");
	exit();
?>