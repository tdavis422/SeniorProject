<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Equipment Type</th>
      <th>Status</th>
      <th>Last Cleaned By</th>
	  <th>Sanitize?</th>
    <th>Remove?</th>
    </tr>
  </thead>
  <tbody>
<?php
$query = "SELECT * FROM equipment";
$select_equipment = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_equipment)){
  $equipment_id = $row['equipmentID'];
  $equipment_type = $row['equipmentTypeID'];
  $status = $row['equipmentStatus'];
  $lastCleanedBy = $row['lastCleanedBy'];
?>
<tr>
  <td><?=$equipment_id?></td>
  <td><?=$equipment_type?></td>
  <td><?=$status?></td>
  <td><?=$lastCleanedBy?></td>
  <td><a href='equipment.php?source=sanitize&sanitizeE=<?= '$equipment_id' ?>'>Sanitize</a></td>
  <td><a href='equipment.php?source=remove&removeEquipment=<?'$equipment_id' ?>'>Remove</a></td>
  <td>
</tr>
<?php
}
?>
  </tbody>
</table>
