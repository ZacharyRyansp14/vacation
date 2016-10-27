<?php
require('../model/database.php');
require('../model/vacation_db.php');

if (isset($_POST['action'])) {
		$action = $_POST['action'];
	} else if (isset($_GET['action'])) {
		$action = $_GET['action'];	
	} else if ( !isloggedin() ) {
  		header( 'Location: login.php');
	} else {
		$action = 'list_vacation';
}

if ($action == 'list_vacation') {
	// get current vacation ID
	if (isset($_GET['vacation_id'])) {
		$vacation_id = intval($_GET['vacation_id']);
	} else {
		$vacation_id = 1;
	}

//get our thought and vacation data

$vacation_id = filter_input(get_vacation_place($vacation_id));
$vacations = get_vacation();
$vacation_place = get_vacation_place($vacation_id);
$vacation_review = get_vacation();
//display product list

include('vacation_list.php');

} else if ($action == 'show_edit_form') {
	$VacationId = $_GET['VacationId'];
	$VacationPlace = $_GET['VacationPlace'];
	$VacationReview = $_GET['VacationReview'];
	$VacationRating = $_GET['VacationRating'];


	include('vacation_edit.php');
} else if ($action == 'edit_vacation') {
		
		// print_r($_POST);
		// edit_vacation($_POST['VacationId'], $_POST['vacation_place'], $_POST['vacation_review'], $_POST['vacation_rating']);

	
	if (empty($_POST['vacation_place']) || empty($_POST['vacation_review']) || empty($_POST['vacation_rating'])) {
		$error = "Invalid. You did not fill out every field.";
		include('../errors/error.php');
	} else {
		print_r($_POST);
		edit_vacation($_POST['VacationId'], $_POST['vacation_place'], $_POST['vacation_review'], $_POST['vacation_rating']);
	
	// display the product list
	header("Location: .?list_vacation");
	}



} else if ($action == 'show_add_form') {

	$vacations = get_vacation();
	include('vacation_add.php');

} else if ($action == 'add_vacation') {
	$vacation_id = $_POST['vacation_id'];
	$vacation_place = $_POST['vacation_place'];
	$vacation_review = $_POST['vacation_review'];
	$vacation_rating = $_POST['vacation_rating'];

	// validate inputs
	if (empty($vacation_place) || empty($vacation_review) || empty($vacation_rating)) {
		$error = "Invalid. You did not fill out every field.";
		include('../errors/error.php');
	} else {
	add_vacation($vacation_place, $vacation_review, $vacation_rating);
	
	// display the product list
	header("Location: .?list_vacation");
	}

} else if ($action == 'list_vacation') {

	$vacations = get_vacation();	
	include('vacation_list.php');
} else if ($action == 'add_vacation') {
	$vacation_place = $_POST['vacation_place'];
	$vacation_review = $_POST['vacation_review'];
	$vacation_rating = $_POST['vacation_rating'];
if(empty($vacation_place) || empty($vacation_review) || empty($vacation_rating)) {
$error = "Invalid. Does not meet the requirements.";
include('../errors/error.php');
} else {
	add_vacation($vacation_place, $vacation_review, $vacation_rating);
	header('Location: .?action=list_vacation');
}
} else if ($action == 'delete_vacation') {
	$vacation_id = $_GET['VacationId'];
	delete_vacation($vacation_id);
	header('Location: .?action=list_vacation');
}

?>