<!--Allows the admin to add students into the checkouts table in case the system goes down-->
<?php include "includes/admin_header.php" ?>
<?php include "functions.php" ?>

<div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Add Students
            <small><?=$_SESSION['username']?></small>
          </h1>
<?php
//Checks what POST parameter was set from the form at the bottom
if(isset($_POST['add_student'])){
  //Sets variables from form
  $workerID = $_SESSION['username'];
  $equipmentID = $_POST['equipmentID'];
  $studentID = $_POST['studentID'];
  $timeOut = $_POST['timeOut'];
  $timeIn = $_POST['timeIn'];

  //Sends data to database for insertion
  $query = "INSERT INTO checkouts(dateUsed, equipmentID, studentID, workerID,
    timeOut, timeIn)";
  $query .= "VALUES(CURDATE(), '{$equipmentID}', '{$studentID}',
    '{$workerID}', '{$timeOut}', '{$timeIn}')";
  $create_equipment_query = mysqli_query($connection, $query);
  confirm_query($create_equipment_query);
?>
  Equipment Added: <a href='equipment.php'>View Equipment</a>
<?php
}
?>
<!--Form to add data for brand new equipment that has not been added to the system before-->
<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="equipmentID">Scan or Enter Equipment ID</label>
    <input type="text" class="form-control" name="equipmentID" autofocus>
  </div>

  <div class="form-group">
    <label for="equipmentType">Student ID</label>
    <input type="text" class="form-control" name="studentID">
  </div>

  <div class="form-group">
    <label for="cost">Time Out</label>
    <input type="text" class="form-control" name="timeOut">
  </div>

  <div class="form-group">
    <label for="cost">Time In</label>
    <input type="text" class="form-control" name="timeIn">
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="add_student"
      value="Add Student">
  </div>
</form>
