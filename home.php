<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
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
		<h2>Admin</h2>
	</div>
	<div class="content">
		<!-- notification message -->
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
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

						<small>
		
						<br></br>
						 <br><a href="create_user.php" target="_blank"> Add user</a></br>
						 <br><a href="../viewUsers.php" target="_blank"> View user</a></br>
						 <br><a href="../projectmap.html" target="_blank"> Request Cleaning Job</a></br>
						 <br><a href="../viewRequest.php" target="_blank"> View jobs</a></br>
						 <br><a href="home.php?logout='1'" style="color: red;">logout</a></br>
					</small>

				<?php endif ?>
			</div>
		</div>



	</div>
		
</body>
</html>