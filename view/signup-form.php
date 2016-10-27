
<?php include '../view/header.php' ?>

<main>
	<div class="parallax-container">
	    <div class="parallax"><img src="../images/background3.jpg"></div>
			<div class="container">
			<h1 class="white-text">Registration Form</h1>
				<div class="card">
					<div class="card-content">
						<span class="card-title">Register to add your own review</span>
						<div class="container">
							<form action="." method="post">
								<input type="hidden" name="action" value="signup" />
								<label>Enter a Username</label>
								<input type="text" name="username" placeholder="Username" />
								<label>Enter a Password</label>
								<input type="password" name="password"/>
								<label>Confirm password</label>
								<input type="password" name="cpassword" />
								<input class="btn blue btn-waves-effect light-waves" type="submit" value="submit" />
								<?php if (isset($e)) : ?>
									<span class="red-text"><?= $e ?></span>
								<?php endif; ?>
							</form>
						</div>
					</div>
				</div>
			</div>


<?php include '../view/footer.php' ?>