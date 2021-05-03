<?php
session_start();
//This file deals with the checkins of equipment

include "../includes/db.php";
include "../includes/functions.php";

$studentID = $_SESSION['studentID'];

if(isset($_POST['checkin'])){
  $equipmentID = $_POST['equipmentID'];
}//if
  //when an equipment is checked in they are set in the database as Needs Sanitized
  $query = "UPDATE checkouts SET timeIn = CURTIME() WHERE dateUsed = CURDATE() AND equipmentID = '{$equipmentID}' AND studentID = '{$studentID}' AND timeIN IS NULL; ";
  $checkin_query = mysqli_query($connection, $query);
  confirm_query($checkin_query);
  $update_equipment = "UPDATE equipment SET equipmentStatus = 'Needs Sanitized' WHERE equipmentID = '{$equipmentID}'";
  $update_equipment_query = mysqli_query($connection, $update_equipment);
  confirm_query($update_equipment_query);
  header("Location: ../index.php");
?>
