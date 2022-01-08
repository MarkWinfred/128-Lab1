<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMSC 128 LAB</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div>
		<img src="img\logo.PNG" alt="Logo" width="200px" height="60px">
		</div>
		<nav class="navbar">
			<ul>
				<li><a href="#" type="button" class="Home">Home</a></li>
				<li><a href="#" type="button" class="About">About</a></li>
				<li><a href="#" type="button" class="Services">Services</a></li>
			</ul>
		</nav>
		<div class="socmed">
		<a href="https://www.facebook.com/">
			<img alt="Facebook" src="img\soc_fb.jpg" width="25" height="25">
		</a>
		<a href="https://www.instagram.com/">
			<img alt="Facebook" src="img\soc_ig.jpg" width="25" height="25">
		</a>
		<a href="https://www.twitter.com/">
			<img alt="Facebook" src="img\soc_twt.jpg" width="25" height="25">
		</a>
		</div>
	</header>

	<section>
		<div class="box">
			<div>
				<form action="login.php" method="post">
					<h2>LOGIN</h2>
			     	<?php if (isset($_GET['error'])) { ?>
			     		<p class="error"><?php echo $_GET['error']; ?></p>
			     	<?php } ?>
					<label>User Name</label>
					<input type="text" name="uname" placeholder="User Name"><br>
					<label>Password</label>
					<input type="password" name="password" placeholder="Password"><br>
     				<button type="submit">Login</button>
          			<a href="signup.php" class="ca">Create an account</a>
				</form>
			</div>
		</div>
	</section>
</body>
</html>