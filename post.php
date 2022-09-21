<?php

	include("config.php");

	include("functions.php");

	if(!loggedIn()){
		header("Location: index.php?warning=You do not have permission to access the \"post.php\" page.");
	}

	$userInfo = json_decode(base64_decode($_COOKIE['login-session']));

	$profileInformation = get_profile_information($userInfo->user_id);

	if($profileInformation == "Error 404"){
		header("Location: errors/404.php");
		exit();
	}

	$pageTitle = "My Account - Vulnerable web application - arctil";

	include("template/header.php");


	echo '<h2>Post News</h2>';
?>	
	<section id="page-section">
		<div id="news-preview-top"></div>
		<div id="news-preview">
			<form action="" method="POST">
				<div id="form-input-section">
					<label>Article Name: </label><br /><input type="text" name="name" />
				</div>
				<div id="form-input-section">
					<label>Article Body</label><br />
					<textarea name="body"></textarea>
				</div>
				<input type="hidden" name="user_id" value="<?php echo $userInfo->user_id; ?>" />
				<div id="form-input-section">
					<button class="button" name="post">Post News Article</button>
				</div>
			</form>

			<?php

				if(isset($_POST['post'])){

					submit_news($_POST['user_id'], $_POST['name'], $_POST['body']);

				}

			?>
		</div>
		<div id="news-preview-bottom"></div>
	</section>

<?php

	include("template/footer.php");

?>
