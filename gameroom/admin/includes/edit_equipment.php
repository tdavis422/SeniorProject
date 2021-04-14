<?php
if(isset($_POST['edit_equipment'])){
  $equipmentID = $_GET['editEquipment'];
  $cost = $_POST['cost'];
  $notes = $_POST['notes'];

  $query = "UPDATE equipment SET equipmentStatus = 'ready', lastCleanedBy = 'Replaced', cost = '{$cost}', dateAdded = now(), dateRemoved = NULL, notes = '{$notes}' WHERE equipmentID = {$equipmentID}";

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
    <input type="text" class="form-control" name="cost">
  </div>

  <div class="form-group">
    <textarea name="notes" rows="15" cols="30" placeholder="Notes about equipment"></textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="edit_equipment"
      value="Edit Equipment">
  </div>
</form>
