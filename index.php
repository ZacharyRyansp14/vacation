<?php
require('./model/database.php');
require('./model/vacation_db.php');


if (isset($_POST['action'])) {
  $action = $_POST['action'];
  } else if (isset($_GET['action'])) {
  $action = $_GET['action'];  
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

$vacation_id = get_vacation_place($vacation_id);
$vacations = get_vacation();
$vacation_place = get_vacation_place($vacation_id);
$vacation_review = get_vacation();
//display product list

include('view/landing.php');

}

?>