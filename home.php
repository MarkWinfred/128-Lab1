<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
          <a href="logout.php">Logout</a>
          </div>
     </header>
     <div>
          <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     </div>
</body>
</html>

<?php 
}else{
     header("Location: 128index.php");
     exit();
}
 ?>