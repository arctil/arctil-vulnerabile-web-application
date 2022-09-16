<?php

	include("config.php");	

	if(isset($_GET['url'])){
		$url = urldecode($_GET['url']);
		if(is_string($_GET['url'])){
			header("Location: ".$url);
			exit();
		}
	}else{
		header("Location: index.php?warning=No redirect url specified!");
		exit();
	}

?>