<?php

	include("config.php");

	include("functions.php");

	$profileInformation = get_profile_information($_GET['id']);

	if($profileInformation == "Error 404"){
		header("Location: errors/404.php");
		exit();
	}

	$pageTitle = $profileInformation['name']." - Vulnerable web application - arctil";

	include("template/header.php");


	echo '<h2>'.$profileInformation['name'].'</h2>';
?>	
	<section id="page-section">
		<div id="news-preview-top"></div>
		<div id="news-preview">
			<?php

				echo $profileInformation['profile'];

			?>
		</div>
		<div id="news-preview-bottom"></div>
	</section>

<?php

	include("template/footer.php");

?>