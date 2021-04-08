<?php
include "./includes/student_header.php";

$studentID = $_SESSION['studentID'];

if(isset($_POST['submitPingPong'])){
  $studentID = $_SESSION['studentID'];
  $equipmentPPID = $_POST['pingPong'];

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '$studentID', '{$equipmentPPID}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitPool'])){
  $studentID = $_SESSION['studentID'];
  $equipmentpoolID = $_POST['pool'];

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentpoolID}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitFoosball'])){
  $studentID = $_SESSION['studentID'];
  $equipmentfoosballID = $_POST['foosball'];

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentfoosballID}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitXbox'])){
  $studentID = $_SESSION['studentID'];
  $equipmentxboxID = $_POST['xbox'];

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentxboxID}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitPC'])){
  $studentID = $_SESSION['studentID'];
  $equipmentPCID = $_POST['pc'];

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentPCID}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitFriend'])){
  $studentID = $_SESSION['studentID'];
  $equipmentfriendsID = $_POST['friends'];

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentfriendsID}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("You have been added. Please verify with worker.")</script>';
  header("Location: ../index.php");
}
?>
