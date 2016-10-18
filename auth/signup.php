<?php //session_start();



// if ( isset($_REQUEST['user']) && isset($_REQUEST['pass']) ) { 
// 	$user = $_REQUEST['user'];
// 	$pass = $_REQUEST['pass'];

// 	//signup successful
// 	if ( signup($user, $pass) ) {
// 		header( 'Location: login.php?user='.$user.'&pass='.$pass );
// 	}

// 	//signup unsuccessful
// 	else {
// 		header( 'Location: login.php' );
// 	}
// }

function signup ( $username, $password ) {

	//get hash and salt of password
	$salt = getSalt();
	$hash = crypt($password, $salt);

	//prepare SQL statement
	$conn = new PDO('mysql:host=localhost;dbname=vacation', 'root', '');
	$stmt = $conn->prepare(
		'INSERT INTO `user`
		(`username`, `salt`, `hash`)
		VALUES
		(:username, :salt, :hash)');

	//bind params
	$stmt->bindParam(':username', $username, PDO::PARAM_STR);
	$stmt->bindParam(':salt', $salt, PDO::PARAM_STR);
	$stmt->bindParam(':hash', $hash, PDO::PARAM_STR);

	//execute SQL statement
	if ($stmt->execute())
		return true;
	else
		return false;
}

function getSalt() {
     $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/.';
     $randString = "";
     $randStringLen = 64;
     while(strlen($randString) < $randStringLen) {
         $randChar = substr(str_shuffle($charset), mt_rand(0, strlen($charset)), 1);
         $randString .= $randChar;
     }
     return $randString;
}

?>

<?php include '../view/header.php' ?>

<main>
	<div class="container">
		<form action="." method="get">
			<label>Enter a Username</label>
			<input type="text" name="user" placeholder="Username" />
			<label>Enter a Password</label>
			<input type="password" name="pass" placeholder="Password" />
			<input type="submit" value="submit" />
		</form>
	</div>
</main>


<?php include '../view/footer.php' ?>