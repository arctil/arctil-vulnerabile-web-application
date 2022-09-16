			
			</div>
			<aside id="page-sidebar">
				<section id="sidebar-section">
					<?php 
						if (!loggedIn()){
					?>
					<h3>Account Login</h3>
					<form action="" method="POST">
						<div id="form-section">
							<label>Username: </label><input type="text" name="username" />
						</div>
						<div id="form-section">
							<label>Password: </label><input type="password" name="password" />
						</div>
						<div id="form-section">
							<button name="login" class="button login-button">Login</button>
						</div>
						<!-- test user credentials -->
						<!-- username: sample -->
						<!-- password: xsFR21SsAD3adDE -->
					<?php
						}else{

							$userInfo = json_decode(base64_decode($_COOKIE['login-session']));

							$upvotes_for_user = upvotes_for_user($userInfo->user_id);
					?>

					<h3>Hello <?php echo $userInfo->name; ?></h3>

					<p>Upvotes: <?php echo $upvotes_for_user['upvotes']; ?></p>

						<?php
							}

							if(isset($_POST['login'])){

								$loggedIn = login($_POST['username'], $_POST['password']);

								if($loggedIn == "Login Successful"){
									echo $loggedIn;
									header("Location: index.php");
								}else{
									echo '<div id="warning"><p>'.$loggedIn.'</p></div>';
								}
							}

						?>
					</form>
				</section>
				<ul>
					<li>&copy; Copyright arctil 2021 - 2022.</li>
					<li><a href="https://arctil.com">arctil Website</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="vulnerabilities.php">Vulnerabilities</a></li>
					<li><a href="https://twitter.com/realarctil">Twitter</a></li>
					<li><a href="https://facebook.com/Arctil">Facebook</a></li>
					<li><a href="https://github.com/arctil">Github</a></li>
				</ul>
			</aside>
		</div>
		<footer id="page-footer">

		</footer>
	</body>
</html>
