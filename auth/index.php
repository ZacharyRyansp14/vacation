<?php 

	require_once('../model/auth.php');

	$auth = new Auth();

	if (isset($_REQUEST['action'])) $action = $_REQUEST['action'];
	else $action = '';

	switch ($action) {
		default:
			include '../view/header.php';
			include '../view/footer.php';
			break;

		case 'login-form':
			include '../view/login-form.php';
			break;

		case 'login':
			$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
			$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

			if ($auth->login($username, $password) == true) {
				echo "LOGGED IN <br/>";
				header('location: .');
			} else {
				echo "FAILURE";
			}

			break;

		case 'logout':
			$auth->logout();
			header('location: .');
			break;

		case 'signup-form':
			include '../view/signup-form.php';
			break;

		case 'signup':
			$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
			$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
			$cpassword = filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_STRING);

			if($password == '' || $username ==  ''){
				$e ="Password and Username is Required";
				include('../view/signup-form.php');
				break;
			} else{
				if(strcmp($password, $cpassword) == 0){
					if($auth->signup($username, $password) == true){
						echo "signed up <br />";
						$auth->login($username, $password);
						header('location: .');
						print_r($_SESSION);
					} else {
						$e = "Registration Error";
						include('../view/signup-form.php');
					}
				break;
				} else {
					$e = "Passwords do not match";
					include('../view/signup-form.php');
					break;

				}
			}

			break;


		case 'vacation_add_form' :
			include '../view/vacation_add_form.php'
			break;

		case 'vacation_add':
			include 'vacation_add.php';
			break;

		case 'vacation_edit_form' :
			include '../view/vacation_edit_form.php'


		case 'vacation_edit' :
			include 'vaction_edit.php';
			break;

		case 'vacation_list':
			include 'vacation_list.php';
			break;
	}

?>