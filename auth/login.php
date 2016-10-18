<?php session_start();

if ( isset($_REQUEST['user']) && isset($_REQUEST['pass']) ) {

	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	
	if ( login($user, $pass) ) {
		//login successful
		header('Location: index.php');
		echo 'login successful';
	}
	else {
		//login unsuccessful
		header('Location: login.php');
		echo 'login unsuccessful';
	}

} else {

?>
<?php include '../view/header.php'; ?>

<main>
	<div class="container">
		<div class="row">
			<h1 class="center">Log In</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col m8 offset-m2">
				<div class="card">
					<div class="card-content">
						<span class="card-title styleh2">User and Password are in the Zip File</span>
							<form action="login.php" method="get">
								<input name='user' type="text" placeholder='username' required />
								<input name='pass' type="password" placeholder='password' required />
								<input type="submit" value='login' />
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php include '../view/footer.php' ?>

<?php

}

function login ( $username, $password ) {

	//prepare SQL statement
	$conn = new PDO('mysql:host=localhost;dbname=vacation', 'root', '');
	$stmt = $conn->prepare(
		'SELECT `salt`, `hash`
		 FROM `user`
		 WHERE username = :username');

	//bind param and execute SQL statement
	$stmt->bindParam(":username", $username, PDO::PARAM_STR);
	$stmt->execute();

	//get query results
	if ( $result = $stmt->fetch(PDO::FETCH_ASSOC) ) {

		//check validity of password
		if ( crypt($password, $result['salt']) == $result['hash'] ) {
			//passwords match
			$_SESSION['username'] = $username;
			return true;
		}
		else {
			//passwords did not match
			return false;
		}
	}
	else {
		//username was not found
		return false;
	}
}

?>