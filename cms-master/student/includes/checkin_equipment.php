<?php
include "../includes/student_header.php";

if(isset($_POST['checkin'])){
//$studentID = $_SESSION['studentID'];
  $equipmentID = $_POST['equipmentID'];

  $query = "UPDATE checkouts SET equipmentStatus = 'Needs Sanitized', timeIn = now(), WHERE equipmentID = $equipmentID AND date = now() AND studentID = '0'";
  $checkin_query = mysqli_query($connection, $query);
  confirm_query($checkin_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../../index.php");
}
?>
