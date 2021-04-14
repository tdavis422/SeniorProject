<?php
include "./includes/student_header.php";

$studentID = $_SESSION['studentID'];

if(isset($_POST['submitPingPong'])){
  $studentID = $_SESSION['studentID'];
  $equipmentPPID = $_POST['pingPong'];
  $equipmentType = 1;

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID, equipmentTypeID)";
  $query .= "VALUES(CURDATE(), CURTIME(), '$studentID', '{$equipmentPPID}', '{$equipmentType}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitPool'])){
  $studentID = $_SESSION['studentID'];
  $equipmentpoolID = $_POST['pool'];
  $equipmentType = 2;

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID, equipmentTypeID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentpoolID}', '{$equipmentType}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitFoosball'])){
  $studentID = $_SESSION['studentID'];
  $equipmentfoosballID = $_POST['foosball'];
  $equipmentType = 3;

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID, equipmentTypeID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentfoosballID}', '{$equipmentType}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitXbox'])){
  $studentID = $_SESSION['studentID'];
  $equipmentxboxID = $_POST['xbox'];
  $equipmentType = 4;

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID, equipmentTypeID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentxboxID}', '{$equipmentType}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitPC'])){
  $studentID = $_SESSION['studentID'];
  $equipmentPCID = $_POST['pc'];
  $equipmentType = 5;

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID, equipmentTypeID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentPCID}', '{$equipmentType}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("Equipment has been checked out. Please verify with worker.")</script>';
  header("Location: ../index.php");
}

else if(isset($_POST['submitFriend'])){
  $studentID = $_SESSION['studentID'];
  $equipmentfriendsID = $_POST['friends'];
  $equipmentType = 6;

  $query = "INSERT INTO verifystudents(date, timeOut, studentID, equipmentID, equipmentTypeID) ";
  $query .= "VALUES(CURDATE(), CURTIME(), '{$studentID}', '{$equipmentfriendsID}', '{$equipmentType}')";

  $verify_student_query = mysqli_query($connection, $query);
  confirm_query($verify_student_query);
  echo '<script type="text/javascript">alert("You have been added. Please verify with worker.")</script>';
  header("Location: ../index.php");
}
?>
