<!-- This file is for getting all the data for students and what equipment they used.-->

<?php include "includes/admin_header.php" ?>
<?php include "functions.php" ?>

<div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

<?php
if(isset($_POST['submitStudents'])){
?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            <small><?=$_SESSION['username']?></small>
          </h1>
<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>checkoutsID</th>
      <th>equipmentID</th>
	  <th>equipmentType</th>
	  <th>Status</th>
      <th>studentID</th>
      <th>workerID</th>
      <th>timeOut</th>
      <th>timeIn</th>
	  <th>lastCleanedBy</th>
	  <th>cost</th>
    </tr>
  </thead>
  <tbody>

<?php
		$query = "SELECT * FROM equipment NATURAL JOIN checkouts WHERE equipmentTypeID = 6";
		$select_equipment = mysqli_query($connection, $query);
			while($row = mysqli_fetch_assoc($select_equipment)){
				$checkoutsID = $row['checkoutsID'];
				$equipmentID = $row['equipmentID'];
				$equipmentType = $row['equipmentType'];
				$status = $row['equipmentStatus'];
				$studentID = $row['studentID'];
				$workerID = $row['workerID'];
				$timeOut = $row['timeOut'];
				$timeIn = $row['timeIn'];
				$lastCleanedBy = $row['lastCleanedBy'];
				$cost = $row['cost'];
?>
			<tr>
				<td><?= $checkoutsID ?></td>
                <td><?= $equipmentID ?></td>
				<td><?= $equipmentType ?></td>
				<td><?= $status ?></td>
                <td><?= $studentID ?></td>
                <td><?= $workerID ?></td>
                <td><?= $timeOut ?></td>
                <td><?= $timeIn ?></td>
				<td><?= $lastCleanedBy ?></td>
				<td><?= $cost ?></td>
		    </tr>
<?php
			}
?>
  </tbody>
</table>

<?php
}
?>
	
<?php include "includes/admin_footer.php" ?>