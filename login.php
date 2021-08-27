<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Clean Sweep Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Project.css" type="text/css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<br></br>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<br></br>
		 <br><a href="../projectmap.html" target="_blank"> Request Cleaning Job</a></br>
		
	</form>


</body>
</html>