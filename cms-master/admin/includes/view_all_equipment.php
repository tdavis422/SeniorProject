<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Equipment Type</th>
      <th>Status</th>
      <th>Last Cleaned By</th>
      <th>Cost</th>
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
  $equipment_id = $row['equipmentID'];
  $equipment_type = $row['equipmentType'];
  $status = $row['equipmentStatus'];
  $lastCleanedBy = $row['lastCleanedBy'];
  $cost = $row['cost'];
?>
<tr>
  <td><?=$equipment_id?></td>
  <td><?=$equipment_type?></td>
  <td><?=$status?></td>
  <td><?=$lastCleanedBy?></td>
  <td><?=$cost?></td>
  <td><a href='equipment.php?sanitize=<?= '$equipment_id' ?>'>Sanitize</a></td>
  <td><a href='equipment.php?edit=<?= '$equipment_id' ?> '>Edit</a></td>
  <td><a href='equipment.php?remove=<?= '$equipment_id'?> '>Remove</a></td>
</tr>
<?php
}
?>
  </tbody>
</table>
