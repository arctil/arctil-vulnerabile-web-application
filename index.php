<?php

	include("config.php");

	$pageTitle = "Vulnerable web application - arctil";

	include("functions.php");

	include("template/header.php");

?>

	<h2>Whats trending</h2>
	<section id="page-section">
		<div id="news-preview-top"></div>
		<?php	
			get_news_articles(5);
		?>
		<div id="news-preview-bottom"></div>
		<p>View more over at our <a href="news.php?limit=25">news hub</a>.</p>
	</section>

<?php

	include("template/footer.php");

?>