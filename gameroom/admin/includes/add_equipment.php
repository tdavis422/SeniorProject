<?php
//Checks what POST parameter was set from the form at the bottom
if(isset($_POST['create_equipment'])){
  //Sets variables from form
  $equipmentID = $_POST['equipmentID'];
  $equipmentType = $_POST['equipmentType'];
  $equipmentStatus = "ready";
  $cost = $_POST['cost'];
  $notes = $_POST['notes'];

  //Sends data to database for insertion
  $query = "INSERT INTO equipment(equipmentID, equipmentTypeID, equipmentStatus,
    lastCleanedBy, cost, dateAdded, dateRemoved, notes) ";
  $query .= "VALUES('{$equipmentID}', '{$equipmentType}', '{$equipmentStatus}',
    NULL, '{$cost}', now(), NULL, '{$notes}')";
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
    <label for="equipmentType">Equipment Type</label>
    <input type="text" class="form-control" name="equipmentType">
  </div>

  <div class="form-group">
    <label for="cost">Cost</label>
    <input type="text" class="form-control" name="cost">
  </div>

  <div class="form-group">
    <textarea name="notes" rows="15" cols="30" placeholder="Notes about equipment"></textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_equipment"
      value="Add Equipment">
  </div>
</form>
