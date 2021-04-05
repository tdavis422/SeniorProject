<?php
include "../includes/student_header.php";

$studentID = $_SESSION['studentID'];

if(isset($_POST['checkin'])){
  $equipmentID = $_POST['equipmentID'];

  $query = "UPDATE checkouts SET timeIn = now() WHERE equipmentID = $equipmentID AND dateUsed = now() AND studentID = $studentID";
  $checkin_query = mysqli_query($connection, $query);
  confirm_query($checkin_query);
  $update_equipment = "UPDATE equipment set equipmentStatus = 'Needs Sanitized' WHERE equipmentID = $equipmentID";
  $update_equipment_query = mysqli_query($connection, $update_equipment);
  confirm_query($update_equipment_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../../index.php");
}
?>
