<?php

	include("config.php");

	$pageTitle = "about - Vulnerable web application - arctil";

	include("functions.php");

	include("template/header.php");

?>

	<h2>Welcome</h2>
	<section id="page-section">
		<div id="news-preview-top"></div>
		<div id="news-preview">
			<p>Hey there, you're currently viewing the arctil vulnerable web application (AVWA). So, what exactly is AVWA? Well, AVWA is a sample website built with the purpose of being insecure. I know, i know, most web developers usually try and do the opposite of this but here's the thing. How do you expect to get better with security if you don't know how to find and protect against these vulnerabilities.</p>
			<p>So how are you to find these vulnerabilities? One example would be to test by hand, to manually explore the website poking and proding everything until you find a security risk. Another idea might be to run some automated scans. This can cost, however, the official arctil web security assessment tool is 100% free. You'll be able to get a copy here - <a href="redirect.php?url=https://arctil.com/download">Get arctil</a>.</p>
		</div>
		<div id="news-preview-bottom"></div>
	</section>

<?php

	include("template/footer.php");

?>