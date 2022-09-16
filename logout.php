<?php

	include("config.php");

	include("functions.php");

	if(loggedIn()){
		setcookie("login-session", "", time() - 3600);
		header("Location: index.php");
		exit();
	}

	header("Location: index.php");
	exit();

?>