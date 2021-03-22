<?php
if(isset($_POST['edit'])){
  $the_equipment_id = $_GET['$edit'];
  $query = "SELECT * FROM equipment WHERE equipmentID = $the_equipment_id ";
  $select_equipment_query = mysqli_query($connection, $query);
  confirm_query($select_equipment_query);

  while($row = mysqli_fetch_assoc($select_equipment_query)){
    $edit_equipmentID = $row['equipmentID'];
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
  $equipmentID = $row['equipmentID'];
  $cost = $row['cost'];
  $dateAdded = $row['dateAdded'];
  $notes = $row['notes'];

  $query = "UPDATE equipment SET ";
  $query .= "equipmentID = '{$equipmentID}', ";
  $query .= "equipmentStatus = ready, ";
  $query .= "lastCleanedBy = Replaced, ";
  $query .= "cost = '{$cost}', ";
  $query .= "dateAdded = now(), ";
  $query .= "dateRemoved = NULL, ";
  $query .= "notes = '{$notes}', ";
  $query .= "WHERE equipmentID = {$edit_equipmentID}";

  $edit_equipment_query = mysqli_query($connection, $query);
  confirm_query($edit_equipment_query);
}
?>

<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="equipmentID">Scan or Enter Equipment ID</label>
    <input type="text" class="form-control" value="<?=$equipmentID?>" name="equipmentID">
  </div>

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
