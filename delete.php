<?php

	include('config.php');

	include('functions.php');

	if(loggedIn()){

		if(isset($_GET['nid']) && isset($_GET['uid'])){

			$userInfo = json_decode(base64_decode($_COOKIE['login-session']));

			if($userInfo->role == "Account Master" && $userInfo->user_id == "1"){

				delete_article($_GET['nid']);
				header("Location: index.php");
				exit();

			}else{

				header("Location: index.php?warning=Although user has required permissions, it appears they did not create this article.");
				exit();

			}

		}

	}

?>