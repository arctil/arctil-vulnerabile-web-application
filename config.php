<?php
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	session_start();

	try{

		$dbConnection = mysqli_connect('localhost','root','','avwa') or die("Error connecting to MySQL database");

	}catch(Exception $exception){

		include("errors/sql-error.php");
		exit();

	}

?>
