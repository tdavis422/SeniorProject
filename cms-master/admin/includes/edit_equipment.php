<?php
if(isset($_GET['edit'])){
  $the_equipment_id = $_GET['editEquipment'];
  $query = "SELECT * FROM equipment WHERE equipmentID = '{$the_equipment_id}' ";
  $select_equipment_query = mysqli_query($connection, $query);
  confirm_query($select_equipment_query);

  while($row = mysqli_fetch_assoc($select_equipment_query)){
    $equipmentID = $row['equipmentID'];
    $equipmentType = $row['equipmentType'];
    $equipmentStatus = $row['equipmentStatus'];
    $lastCleanedBy = $row['lastCleanedBy'];
    $cost = $row['cost'];
    $dateAdded = $row['dateAdded'];
    $dateRemoved = $row['dateRemoved'];
    $notes = $row['notes'];
  }
}

if(isset($_POST['edit_equipment'])){
  $cost = $_POST['cost'];
  $dateAdded = $_POST['dateAdded'];
  $notes = $_POST['notes'];

  $query = "UPDATE equipment SET ";
  $query .= "equipmentStatus = ready, ";
  $query .= "lastCleanedBy = Replaced, ";
  $query .= "cost = '{$cost}', ";
  $query .= "dateAdded = now(), ";
  $query .= "dateRemoved = NULL, ";
  $query .= "notes = '{$notes}', ";
  $query .= "WHERE equipmentID = {$the_equipment_id}";

  $edit_equipment_query = mysqli_query($connection, $query);
  confirm_query($edit_equipment_query);
?>
  Equipment Updated: <a href='equipment.php'>View Equipment</a>
<?php
}
?>

<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="cost">Cost</label>
    <input type="text" class="form-control" value="<?=$cost?>" name="cost">
  </div>

  <div class="form-group">
    <textarea name="notes" rows="15" cols="30" placeholder="Notes about equipment"></textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="edit_equipment"
      value="Edit Equipment">
  </div>
</form>
