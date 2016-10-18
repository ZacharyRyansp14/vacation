<?php

function get_vacation() {
	global $db;
	$query = 'SELECT * FROM vacations
		ORDER BY VacationId';
	$result = $db->query($query);
	return $result;
}


function get_vacation_place($vacation_id) {
	global $db;
	$query = "SELECT * FROM vacations
		WHERE VacationId = '$vacation_id'";
	$vacation = $db->query($query);
	$vacation = $vacation->fetch();
	$vacation_place = $vacation['VacationPlace'];
	return $vacation_place;
}

function add_vacation($vacation_place, $vacation_review, $vacation_rating) {
	global $db;
	$query = "INSERT INTO vacations (VacationPlace, VacationReview, VacationRating)
		VALUES ('$vacation_place', '$vacation_review', $vacation_rating)";
	$db->exec($query);
	echo $query;
}

function edit_vacation($vacation_id, $vacation_place, $vacation_review, $vacation_rating) {
	global $db;
	$query = "UPDATE vacations SET VacationPlace='$vacation_place', VacationReview='$vacation_review', VacationRating=$vacation_rating
		WHERE VacationId= $vacation_id";
	
	$db->exec($query);

	echo $vacation_id . "<br />";
	echo $vacation_place . "<br />";
	echo $vacation_review . "<br />";
	echo $vacation_rating . "<br />";
	
}

function delete_vacation($vacation_id) {
	global $db;
	$query = "DELETE FROM vacations
		WHERE VacationId = $vacation_id";
	$db->exec($query);
	
	echo $vacation_id . "<br />";
}

?>

