<?php

	include("config.php");

	$pageTitle = "vulnerabilities - Vulnerable web application - arctil";

	include("functions.php");

	include("template/header.php");

?>

	<h2>Vulnerabilities</h2>
	<section id="page-section">
		<div id="news-preview-top"></div>
		<div id="news-preview">
			<p>Below you'll see a full list of all the security vulnerabilities intentionally coded into this website, why not see if you can find and exploit them all. Once you;ve gone through the list feel free to hit us up on Twitter and let us know how you got on. Remember, the most important thing is to have fun!</p>
			<ul>				
				<li>Full Path Disclosure</li>
				<li>Reflected Cross Site Scripting</li>
				<li>Stored Cross Site Scripting</li>
				<li>Unvalidated Redirect</li>
				<li>Information Leakage</li>
				<li>Privilage Escalation</li>
				<li>SQL Injection</li>
				<li>Broken Access Control</li>
				<li>Command Execution</li>
				<li>Open Directory Listing</li>
			</ul>
			<p>Should you need any help here are some resources you may find useful.</p>
			<ul>
				<li><a href="https://arctil.com/help">arctil Help</a></li>
				<li><a href="https://owasp.org">OWASP</a></li>
				<li><a href="https://portswigger.net">Portswigger</a></li>
			</ul>
		</div>
		<div id="news-preview-bottom"></div>
	</section>

<?php

	include("template/footer.php");

?>