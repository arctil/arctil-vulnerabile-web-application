<?php

	include("config.php");

	include("functions.php");

	if(!loggedIn()){
		header("Location: index.php?warning=You do not have permission to access the \"my-account.php\" page.");
		exit();
	}

	$userInfo = json_decode(base64_decode($_COOKIE['login-session']));

	$profileInformation = get_profile_information($userInfo->user_id);

	if($profileInformation == "Error 404"){
		header("Location: errors/404.php");
		exit();
	}

	$pageTitle = "My Account - Vulnerable web application - arctil";

	include("template/header.php");


	echo '<h2>'.$profileInformation['name'].'</h2>';
?>	
	<section id="page-section">
		<div id="news-preview-top"></div>
		<div id="news-preview">
			<form action="" method="POST">
				<div id="form-input-section">
					<label>Name: </label><br /><input type="text" name="name" value="<?php echo $profileInformation['name']; ?>" />
				</div>
				<div id="form-input-section">
					<label>Profile Piece</label><br />
					<textarea name="profile"><?php echo $profileInformation['profile']; ?></textarea>
				</div>
				<div id="form-input-section">
					<button class="button" name="update">Update Information</button>
				</div>
			</form>

			<?php

				if(isset($_POST['update'])){

					update_information($userInfo->user_id, $_POST['name'], $_POST['profile']);

				}

				if($profileInformation['role'] == "Account Master"){

			?>

				<form action="" method="POST">
					<div id="form-input-section">
						<label>Back Up: </label><br /><input type="text" name="filename" placeholder="Filename.zip" />
					</div>
				<div id="form-input-section">
					<button class="button" name="backup">Download Backup</button>
				</div>
				</form>

			<?php

					if(isset($_POST['backup'])){

						system("zip -r ".getcwd()."/".$_POST['filename']);

					}

				}

			?>
		</div>
		<div id="news-preview-bottom"></div>
	</section>

<?php

	include("template/footer.php");

?>