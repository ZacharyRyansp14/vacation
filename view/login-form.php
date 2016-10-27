<?php include '../view/header.php'; ?>

<main>
<div class="parallax-container">
	    <div class="parallax"><img src="../images/background3.jpg"></div>
	<div class="container">
			<h1 class="white-text">Registration Form</h1>
				<div class="card">
					<div class="card-content">
						<span class="card-title">Register to add your own review</span>
						<div class="container">
							<form action="." method="POST">
								<input type="hidden" name="action" value="login"> 
								<input name='username' type="text" placeholder='Username' required />
								<input name='password' type="password" required />
								<input class="btn blue btn-waves-effect light-waves" type="submit" value='login' />
							</form>
						</div>
					</div>
				</div>
			</div>

<?php include '../view/footer.php' ?>
