<?php

	include("config.php");

	$pageTitle = "News Hub - Vulnerable web application - arctil";

	include("functions.php");

	include("template/header.php");

	if(!isset($_GET['limit'])){
		$pageLimit = 25;
	}else{
		$pageLimit = $_GET['limit'];
	}

?>

	<h2>News Hub</h2>
	<section id="page-section">
		<div id="news-preview-top"></div>
		<?php	
			get_news_articles($pageLimit);
		?>
		<div id="news-preview-bottom"></div>
	</section>

<?php

	include("template/footer.php");

?>