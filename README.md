# arctil Vulnerabile Web Application
arctil vulnerable web application is a sample website built with the purpose of being insecure. This application is built using PHP and has been integral in testing arctil 3, here's a full list of all known vulnerabilities included with this sample website.

* 	Full Path Disclosure
* 	Reflected Cross Site Scripting
* 	Stored Cross Site Scripting
*	Unvalidated Redirect
*	Information Leakage
*	Privilage Escalation
*	SQL Injection
*	Broken Access Control
* 	IDOR
*	Command Execution
*	Open Directory Listing
*	Local File Inclusion

Should you need any help finding and exploiting these vulnerabilities then here are some resources you may find useful

* https://arctil.com/help - arctil Help
* https://owasp.org - OWASP
* https://portswigger.net - Portswigger

# How to install?

Copy all files into your test server directory (on xampp 'htdocs/'). Once you've done this you'll just need to open the 'config.php' file with a text editor and change the following line

`$dbConnection = mysqli_connect('localhost','root','','avwa') or die("Error connecting to MySQL database");`

Here's what you need to do, replace the following 'localhost','root','','avwa' with you database info. Here's what you'll need to add.

'hostname','username','password','databasename'

Enjoy and happy hacking!

			
