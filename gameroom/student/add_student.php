<?php
include "./includes/student_header.php";

//This file is the code to add a student to the checkins table and get a piece of equipment for them
$studentID = $_SESSION['studentID'];

//In the case that someone wants to use a ping pong set then they will be input into the checkouts table with an equipment
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
}//if
//in the case that someone wants to use the pool table then they will be input into the checkouts table with an equipment
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
}//else if
//in the case that someone wants to use the foosball equipment then they will be input into the checkouts table with an equipment
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
}//else if
//in the case that someone wants to use a xbox then they will be input into the checkouts table with an equipment
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
}//else if
//in the case that someone wants to use a pc then they will be input into the checkouts table with an equipment
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
}//else if
//in the case that someone wants to join a friend to play a game then they will be input into the checkouts table with an equipment
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
}//else if
?>
