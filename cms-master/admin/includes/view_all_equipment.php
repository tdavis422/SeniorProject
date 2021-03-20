<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Equipment Type</th>
      <th>Status</th>
      <th>Last Cleaned By</th>
      <th>Cost</th>
	  <th>Date Added</th>
	  <th>Date Removed From Use</th>
	  <th>Notes</th>
	  <th>Sanitize?</th>
	  <th>Edit</th>
	  <th>Remove From Use</th>
    </tr>
  </thead>
  <tbody>
<?php
$query = "SELECT * FROM equipment";
$select_equipment = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_equipment)){
  $equipmentID = $row['equipmentID'];
  $equipmentType = $row['equipmentType'];
  $status = $row['equipmentStatus'];
  $lastCleanedBy = $row['lastCleanedBy'];
  $cost = $row['cost'];
  $dateAdded = $row['dateAdded'];
  $dateRemoved = $row['dateRemoved'];
  $notes = $row['notes'];
?>
<tr>
  <td><?=$equipmentID?></td>
  <td><?=$equipmentType?></td>
  <td><?=$status?></td>
  <td><?=$lastCleanedBy?></td>
  <td><?=$cost?></td>
  <td><?=$dateAdded?></td>
  <td><?=$dateRemoved?></td>
  <td><?=$notes?></td>
  <td><a href='equipment.php?sanitize&sanitize=<?= $equipmentID ?>'>Sanitize</a></td>
  <td><a href='equipment.php?edit&edit=<?= $equipmentID ?> '>Edit</a></td>
  <td><a href='equipment.php?remove=<?= $equipmentID ?> '>Remove</a></td>
</tr>
<?php
}
?>
  </tbody>
</table>
<?php
if(isset($_GET['remove'])){
  $the_equipment_id = $_GET['remove'];
  $query = "UPDATE equipment SET equipmentStatus = removed WHERE equipmentID = {$the_equipment_ID} ";
  $remove_equipment_query = mysqli_query($connection, $query);
  header("Location: equipment.php");
}
?>