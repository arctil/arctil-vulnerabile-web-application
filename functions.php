<?php

	function get_news_articles($pageLimit){
		global $dbConnection;

		$pageLimit = mysqli_real_escape_string($dbConnection, $pageLimit);

		try{

			$query = mysqli_query($dbConnection, "SELECT `news_title`,`news_body`,`news_id` FROM `news` ORDER BY `news_id` DESC LIMIT ".$pageLimit);

			while($queryRow = mysqli_fetch_assoc($query)){

				$likesQuery = mysqli_query($dbConnection, "SELECT `like_id` FROM `news_likes` WHERE `news_id` = '".$queryRow['news_id']."'");

				echo '<div id="news-preview"><h3>'.$queryRow["news_title"].'</h3><p>'.strip_tags(substr($queryRow["news_body"], 0, 250)).'... <a href="article.php?id='.$queryRow["news_id"].'">Continue reading</a></p><p class="upvotes">Upvotes: '.mysqli_num_rows($likesQuery).'</p></div>';
			}

		}catch(Exception $sqlError){

			//SQL error page...
			header("Location: errors/sql-error.php");
			exit();

		}
	}

	function show_search_results($searchQuery){
		global $dbConnection;

		$searchQuery = mysqli_real_escape_string($dbConnection, $_GET['q']);

		$searchDBQuery = mysqli_query($dbConnection, "SELECT `news_id`,`news_title`,`news_body` FROM `news` WHERE `news_title` LIKE '%".$searchQuery."%'");

		if(mysqli_num_rows($searchDBQuery) > 0){

			while($queryRow = mysqli_fetch_assoc($searchDBQuery)){

				$likesQuery = mysqli_query($dbConnection, "SELECT `like_id` FROM `news_likes` WHERE `news_id` = '".$queryRow['news_id']."'");

				echo '<div id="news-preview"><h3>'.$queryRow["news_title"].'</h3><p>'.strip_tags(substr($queryRow["news_body"], 0, 250)).'... <a href="article.php?id='.$queryRow["news_id"].'">Continue reading</a></p><p class="upvotes">Upvotes: '.mysqli_num_rows($likesQuery).'</p></div>';

			}

		}else{

				echo '<div id="news-preview"><h3>Your search for '.htmlentities($searchQuery, ENT_QUOTES).' returned 0 results.</h3></div>';

		}

	}

	function get_article_information($article_id){
		global $dbConnection;

		$infoQuery = mysqli_query($dbConnection, "SELECT * FROM `news` WHERE `news_id`='".$article_id."' LIMIT 1");

		if(mysqli_num_rows($infoQuery) == 0){

			return "Error 404";

		}

		return mysqli_fetch_assoc($infoQuery);
	}

	function submit_news($id, $name, $body){
		global $dbConnection;

		$id = mysqli_real_escape_string($dbConnection, $id);
		$name = mysqli_real_escape_string($dbConnection, $name);
		$body = mysqli_real_escape_string($dbConnection, $body);

		$submitQuery = mysqli_query($dbConnection, "INSERT INTO `news` (`news_title`,`news_body`,`author`) VALUES ('".$name."','".$body."','".$id."')");
	}

	function update_information($account_id, $name, $profile, $role){
		global $dbConnection;

		$account_id = mysqli_real_escape_string($dbConnection, $account_id);
		$name = mysqli_real_escape_string($dbConnection, $name);
		$profile = mysqli_real_escape_string($dbConnection, $profile);
		$role = mysqli_real_escape_string($dbConnection, $role);

		$updateQuery = mysqli_query($dbConnection, "UPDATE `users` SET `name` = '".$name."', `role` = '".$role."', `profile` = '".$profile."' WHERE `user_id` = '".$account_id."'");
	}

	function get_profile_information($profile_id){
		global $dbConnection;

		$infoQuery = mysqli_query($dbConnection, "SELECT * FROM `users` WHERE `user_id`='".$profile_id."' LIMIT 1") or die(mysqli_error());

		if(mysqli_num_rows($infoQuery) == 0){

			return "Error 404";

		}

		return mysqli_fetch_assoc($infoQuery);
	}

	function author_info($author_name){
		global $dbConnection;

		$getAuthorInfo = mysqli_query($dbConnection, "SELECT `name` FROM `users` WHERE `user_id`='".$author_name."' LIMIT 1");

		return mysqli_fetch_assoc($getAuthorInfo);
	}

	function delete_article($article_id){
		global $dbConnection;

		$article_id = mysqli_real_escape_string($dbConnection, $article_id);

		$deleteQuery = mysqli_query($dbConnection, "DELETE FROM `news` WHERE `news_id` = '".$article_id."'");

		$deleteLikes = mysqli_query($dbConnection, "DELETE FROM `news_likes` WHERE `news_id` = '".$article_id."'");
	}

	function upvote_article($user_id, $article_id){
		global $dbConnection;

		$user_id = mysqli_real_escape_string($dbConnection, $user_id);
		$article_id = mysqli_real_escape_string($dbConnection, $article_id);

		$upvoteQuery = mysqli_query($dbConnection, "INSERT INTO `news_likes` (`news_id`,`user_id`) VALUES ('".$article_id."','".$user_id."')");

	}

	function upvotes_for_user($user_id){
		global $dbConnection;

		$upvotes_count = mysqli_query($dbConnection, "SELECT COUNT(`news_id`) AS `upvotes` FROM `news_likes` WHERE `user_id` = '".$user_id."'");

		return mysqli_fetch_assoc($upvotes_count);

	}

	function upvotes_count($article_id){
		global $dbConnection;

		$article_id = mysqli_real_escape_string($dbConnection, $article_id);

		$upvotes_count = mysqli_query($dbConnection, "SELECT COUNT(`news_id`) AS `upvotes` FROM `news_likes` WHERE `news_id` = '".$article_id."'");

		return mysqli_fetch_assoc($upvotes_count);
	}

	function login($username, $password){
		global $dbConnection;

		if($username == "sample" && $password == "xsFR21SsAD3adDE"){
			setcookie("login-session", "eyJ1c2VybmFtZSI6InNhbXBsZSIsIm5hbWUiOiJBbGFuIiwicm9sZSI6InVzZXIiLCJ1c2VyX2lkIjoiMiJ9");
			return "Login Successful";
		}

		$username = mysqli_real_escape_string($dbConnection, $username);
		$password = mysqli_real_escape_string($dbConnection, $password);

		$userQuery = mysqli_query($dbConnection, "SELECT `user_id`,`name`,`role`,`username` FROM `users` WHERE `username`='".$username."' AND `password`='".$password."'");

		if(mysqli_num_rows($userQuery) > 0){

			$userInfo = mysqli_fetch_assoc($userQuery);

			$cookieString = base64_encode('{"name":"'.$userInfo["name"].'","username":"'.$userInfo["username"].'","role":"'.$userInfo["role"].'","user_id":"'.$userInfo["user_id"].'"}');

			setcookie("login-session", $cookieString);

			return "Login Successful";

		}else{

			return "Login Unsuccessful";

		}
	}

	function loggedIn(){
		if(isset($_COOKIE['login-session'])){
			return true;
		}

		return false;
	}

?>
