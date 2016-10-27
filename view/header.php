<!DOCTYPE html>
<html>
	<head>
		<title>Vacation Reviewing</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
			<link type="text/css" rel="stylesheet" href="../css/style.css" />
			<meta charset="UTF-8" />
	</head>
	<body>
<nav class="blue darken-4">
	<div class="container">
		<div class="nav-wrapper">
			<ul id="nav-mobile" class="left">
				<?php if (isset($_SESSION['username'])) : ?>
					<li>Hello, <?= $_SESSION['username'] ?></li>
					<li><a href=".?action=logout" class="waves-effect waves-light">Log out</a></li>
				<?php else : ?>
					<li><a href=".?action=login-form" class="waves-effect waves-light">Log In</a></li>
					<li><a href=".?action=signup-form" class="waves-effect waves-light">Register</a></li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</nav>

		