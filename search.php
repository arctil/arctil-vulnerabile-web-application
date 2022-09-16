<?php

	include("config.php");

	$pageTitle = "Search results - Vulnerable web application - arctil";

	include("functions.php");

	include("template/header.php");

	if(isset($_GET['q'])){
		echo '<h2>Searching "'.$_GET["q"].'"</h2>';
	}else{
		echo '<h2>Search</h2>';
	}

?>	
	<section id="page-section">
		<div id="news-preview-top"></div>
		<?php

			if(!isset($_GET['q'])){	
				get_news_articles(5);
			}else{
				if(is_string($_GET['q'])){
					show_search_results($_GET['q']);
				}
			}
		?>
		<div id="news-preview-bottom"></div>
	</section>

<?php

	include("template/footer.php");

?>