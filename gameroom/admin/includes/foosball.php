<?php include "includes/admin_header.php" ?>
<?php include "functions.php" ?>

<div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

<?php
if(isset($_POST['submitFoosball'])){
?>

<a href="../report.php">Go Back</a>

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
		$query = "SELECT * FROM equipment RIGHT JOIN checkouts ON equipment.equipmentID = checkouts.equipmentID WHERE equipmentTypeID = 3";
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
