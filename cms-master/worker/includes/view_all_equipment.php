<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Equipment Type</th>
      <th>Status</th>
      <th>Last Cleaned By</th>
	  <th>Sanitize?</th>
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
  <td><a href='sanitize_equipment.php?sanitize=<?= '$equipment_id' ?>'>Sanitize</td>
</tr>
<?php
}
?>
  </tbody>
</table>
