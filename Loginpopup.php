<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet"  href="loginstyle.css">
</head>
<body>
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

     	<button type="submit">Login</button><br><br>
        <a href="signup.php" class="ca">Create an account</a>
     </form>
	 <script>
		<iframe id="popup-iframe" src="Loginpopup.php"></iframe>
		// Get the current URL of the main page
		var currentURL = window.location.href;

		// Check if the current URL is the specific page
		if (currentURL === "levels.php") {
			var iframe = document.getElementById("popup-iframe");
			iframe.style.position = "fixed";
 		    iframe.style.top = "0";
  			iframe.style.left = "0";
  			iframe.style.width = "100%";
  			iframe.style.height = "100%";}
	 </script>
	</div>
</body>
</html>

