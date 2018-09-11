<?php
	session_start();
	session_destroy();
	require("../libraries/config.php");
	header("location:login.php");
	exit();
?>