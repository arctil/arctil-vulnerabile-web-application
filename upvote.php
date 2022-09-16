<?php

	include('config.php');

	include('functions.php');

	if(loggedIn()){

		if(isset($_GET['nid'])){

			$userInfo = json_decode(base64_decode($_COOKIE['login-session']));

			upvote_article($userInfo->user_id, $_GET['nid']);

			header("Location: ".$_SERVER['HTTP_REFERER']);

			exit();

		}

	}

?>