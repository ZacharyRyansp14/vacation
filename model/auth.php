<?php 

session_start();

class Auth {
	public function signup ( $username, $password ) {

		//get hash and salt of password
		$salt = $this->getSalt();
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

	public function login ( $username, $password ) {

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

	public function logout() {
		session_unset();
		session_destroy();
	}

	private function getSalt() {
	     $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/.';
	     $randString = "";
	     $randStringLen = 64;
	     while(strlen($randString) < $randStringLen) {
	         $randChar = substr(str_shuffle($charset), mt_rand(0, strlen($charset)), 1);
	         $randString .= $randChar;
	     }
	     return $randString;
	}

}

?>