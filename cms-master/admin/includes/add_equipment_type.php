<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Add Equipment Type
        </h1>
        <?php
        if(isset($_POST['create_type'])){
          $equipment_type = $_POST['equipment_type'];

          $query = "INSERT INTO equipmenttypes(equipmentType) ";
          $query .= "VALUES('{$equipment_type}')";

          $create_user_query = mysqli_query($connection, $query);
          confirm_query($create_user_query);
        ?>
          Equipment Type Created: <a href='equipment.php'>View All Equipment</a>
        <?php
        }
        ?>
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
