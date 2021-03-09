<?php
if(isset($_POST['create_equipment'])){
  $equipment_id = $_POST['user_firstname'];
  $equipment_type = $_POST['user_lastname'];
  $equipmentStatus = ready;
  $lastCleanedBy = null;
  $dateAdded = date("M.D.Y");
  $dateRemoved = null;
  $notes = $_POST['notes'];


  $query = "INSERT INTO equipment(equipmentID, equipmentType, equipmentStatus,
    lastCleanedBy, dateAdded, dateRemoved, notes) ";
  $query .= "VALUES('{$equipment_id}', '{$equipment_type}', '{$equipmentStatus}',
    '{$lastCleanedBy}', '{$dateAdded}', '{$dateRemoved}', '{$notes}')";

  $create_user_query = mysqli_query($connection, $query);
  confirm_query($create_user_query);
?>
  Equipment Added: <a href='equipment.php'>View Equipment</a>
<?php
}
?>
<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="equipment_id">Scan or Enter Equipment ID</label>
    <input type="text" class="form-control" name="equipment_id" autofocus>
  </div>

  <div class="form-group">
    <label for="equipment_type">Equipment Type</label>
    <input type="text" class="form-control" name="equipment_type">
  </div>

  <div class="form-group">
    <textarea name="notes" rows="15" cols="30" placeholder="Notes about equipment"></textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_equipment"
      value="Add Equipment">
  </div>
</form>
