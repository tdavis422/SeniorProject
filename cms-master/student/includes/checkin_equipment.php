<?php
include "../includes/student_header.php";

if(isset($_POST['checkin'])){
  $equipmentID = $_POST['equipmentID'];

  $query = "UPDATE checkouts SET timeIn = now() WHERE equipmentID = $equipmentID AND date = now() AND studentID = '0'";
  $checkin_query = mysqli_query($connection, $query);
  confirm_query($checkin_query);
  $update_equipment = "UPDATE equipment set equipmentStatus = 'Needs Sanitized' WHERE equipmentID = $equipmentID";
  $update_equipment_query = mysqli_query($connection, $update_equipment);
  confirm_query($update_equipment_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../../index.php");
}
?>
