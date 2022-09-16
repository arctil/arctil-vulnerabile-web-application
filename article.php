<?php

	include("config.php");

	include("functions.php");

	$articleInformation = get_article_information($_GET['id']);

	if($articleInformation == "Error 404"){
		header("Location: errors/404.php");
		exit();
	}

	$pageTitle = $articleInformation['news_title']." - Vulnerable web application - arctil";

	include("template/header.php");


	echo '<h2>'.$articleInformation['news_title'].'</h2>';
?>	
	<section id="page-section">
		<div id="news-preview-top"></div>
		<div id="news-preview">
			<?php	
				echo $articleInformation['news_body'];
			?>
			<br /><br />
			<p class="upvotes">Submission by 
				<?php 
					$upvotes = upvotes_count($_GET['id']);

					$author_info = author_info($articleInformation['author']);

					echo "<a href=\"profile.php?id=".$author_info['user_id']."\">".$articleInformation['author']."</a>   |   Upvotes: ".$upvotes['upvotes']; 

					if(loggedIn()){

						echo "   |    Give ".$articleInformation['author']." an <a href='upvote.php?nid=".$_GET['id']."'>upvote</a>."; 

						$userInfo = json_decode(base64_decode($_COOKIE['login-session']));

						if($userInfo->role == "Account Master"){

							echo "   |    <a href='delete.php?nid=".$_GET['id']."&uid=".$userInfo->user_id."'>Delete</a>."; 

						}
					}
				?>
			</p>
		</div>
		<div id="news-preview-bottom"></div>
		<p>Return to the <a href="news.php?limit=25">news hub</a>.</p>
	</section>

<?php

	include("template/footer.php");

?>