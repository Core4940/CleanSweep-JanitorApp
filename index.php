<?php 
	include('../functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../project2.css">
	<style>
	.header {
		background: orange;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Welcome to Clean Sweep</h2>
	</div>
	<div class="content">
	
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<div class="profile_info">
			<img src="../images/user_profile.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
		
						<br></br>
						 <br><a href="../projectmap.html" target="_blank"> Request Cleaning Job</a></br>
						 <br><a href="../viewRequest.php" target="_blank"> View Jobs</a></br>
						 <br><a href="../admin/home.php?logout='1'" style="color: red;">logout</a></br>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>