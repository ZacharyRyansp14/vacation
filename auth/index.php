<?php session_start();

//DELETE THIS
//userid
//username
//hash
//salt

//redirect if user is not logged in
if ( !isloggedin() ) {
	header( 'Location: login.php');
}

?>


<?php include '../view/header.php'; ?>

<main>
	<div class="container">
		<div class="row">
			<h1 class="col offset-m4">Hello &nbsp; <?php echo $_SESSION['username'];?>! </h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col m4">
				<div class="card">
					<div class="card-content">
						<span class="card-title">Congratulations!</span>
						<p>
							You have successfully logged into this page. <br><br>
							Nothing left to do now but log out! <br><br>
							Enjoy the Cat on the right!<br><br>
						</p>

						<a href="logout.php" class="waves-effect waves-light btn">Log Out</a>
					</div>
				</div>
			</div>
			<div class="col m6">
				<div class="card">
					<div class="card-image">
						<img src="../images/cat.png" />
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php include '../view/footer.php'; ?>

<?php

function isloggedin () {
	return isset( $_SESSION['username'] );
}

?>