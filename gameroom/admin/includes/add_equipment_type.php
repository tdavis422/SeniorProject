<?php
//Checks what is sent from the sending page
if(isset($_POST['create_type'])){
  //Sets Variable for the type of equipment being added
  $equipment_type = $_POST['equipment_type'];

  //Sends query to database
  $query = "INSERT INTO equipmenttypes(equipmentType) ";
  $query .= "VALUES('{$equipment_type}')";
  $create_user_query = mysqli_query($connection, $query);
  confirm_query($create_user_query);
?>
  Equipment Type Created: <a href='equipment.php'>View All Equipment</a>
<?php
}
?>
<!--Form to be able to add equipment type to the database for use of equipment-->
<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="equipment_type">Equipment Type Name</label>
    <input type="text" class="form-control" name="equipment_type">
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_type"
      value="Add Type">
  </div>
</form>
