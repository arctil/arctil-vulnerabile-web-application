<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $pageTitle; ?></title>
		<link rel="stylesheet" type="text/css" href="static/css/stylesheet.css" />
	</head>
	<body>
		<header id="page-header">
			<ul>
				<li><img src="https://arctil.com/static/images/logo.svg" width="110" alt="arctil - vulnerable web application" /></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="news.php">News Hub</a></li>
				<?php

					if(loggedIn()){
				?>
				<li><a href="my-account.php">My Account</a></li>
				<li><a href="logout.php">Logout</a></li>
				<?php
					}

				?>
				<li>
					<form action="search.php" method="GET">
						<input type="text" name="q" placeholder="Search..." />
					</form>
				</li>
			</ul>
		</header>
		<div id="page-wrapper">
			<?php 

				if(!isset($_GET['warning'])){

			?>
			<div id="warning">
				<p><strong>Information:</strong> This is a vulnerable by design web application, please do not attempt to use this in a live environment.</p>
			</div>
			<?php

				}else{

			?>
			<div id="warning">
				<p><strong>Information:</strong> <?php echo $_GET['warning']; ?></p>
			</div>
			<?php
				}

			?>
			<div id="main-content">

