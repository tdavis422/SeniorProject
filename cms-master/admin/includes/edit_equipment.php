<?php
if(isset($_GET['edit_equipment'])){
  $the_equipment_id = $_GET['edit_equipment'];
  $query = "SELECT * FROM equipment WHERE equipment_id = $the_equipment_id ";
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
  $equipmentID = $row['equipmentID'];
  $equipmentType = $row['equipmentType'];
  $equipmentStatus = $row['equipmentStatus'];
  $lastCleanedBy = $row['lastCleanedBy'];
  $cost = $row['cost'];
  $dateAdded = $row['dateAdded'];
  $dateRemoved = $row['dateRemoved'];
  $notes = $row['notes'];

  $query = "UPDATE equipment SET ";
  $query .= "equipmentID = '{$equipmentID}', ";
  $query .= "equipmentType = '{$equipmentType}', ";
  $query .= "equipmentStatus = '{$equipmentStatus}', ";
  $query .= "lastCleanedBy = '{$lastCleanedBy}', ";
  $query .= "cost = '{$cost}', ";
  $query .= "dateAdded = '{$dateAdded}', ";
  $query .= "dateRemoved = '{$dateRemoved}', ";
  $query .= "notes = '{$notes}', ";
  $query .= "WHERE equipmentID = {$the_equipment_id}";

  $edit_equipment_query = mysqli_query($connection, $query);
  confirm_query($edit_equipment_query);
}
?>

<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="user_firstname">Firstname</label>
    <input type="text" class="form-control" value="<?=$user_firstname?>" name="user_firstname">
  </div>

  <div class="form-group">
    <label for="user_lastname">Lastname</label>
    <input type="text" class="form-control" value="<?=$user_lastname?>" name="user_lastname">
  </div>

  <div class="form-group">
    <select class="" name="user_role" id="user_role">
      <option value="<?=$user_role?>"><?=$user_role?></option>
<?php
  if($user_role == 'admin'){
    echo "<option value='subscriber'>subscriber</option>";
  }else{
    echo "<option value='admin'>admin</option>";
  }
?>
    </select>
  </div>

  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" value="<?=$username?>" name="username">
  </div>

  <div class="form-group">
    <label for="user_email">Email</label>
    <input type="email" class="form-control" value="<?=$user_email?>" name="user_email">
  </div>

  <div class="form-group">
    <label for="user_password">Password</label>
    <input type="password" class="form-control" value="<?=$user_password?>" name="user_password">
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="edit_user"
      value="Update User">
  </div>
</form>
