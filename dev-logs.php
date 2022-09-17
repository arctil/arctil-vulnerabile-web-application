<?php

	include("config.php");

	$pageTitle = "Development Logs - Vulnerable web application - arctil";

	include("functions.php");

	include("template/header.php");

?>

	<h2>Development Logs</h2>
	<section id="page-section">
		<div id="news-preview-top"></div>
		<div id="news-preview">
			<?php 

				$url = str_replace("../", "", $_GET['log']);

				echo file_get_contents(getcwd()."/static/log/".$url);

				//echo file_get_contents(getcwd()."/static/log/".$url);

			?>
		</div>
		<div id="news-preview-bottom"></div>
	</section>

<?php

	include("template/footer.php");

?>
