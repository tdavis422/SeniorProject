<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Add Equipment
        </h1>
        <?php
        if(isset($_POST['create_equipment'])){
          $equipmentID = $_POST['equipmentID'];
          $equipmentType = $_POST['equipmentType'];
          $equipmentStatus = "ready";
          $cost = $_POST['cost'];
          $notes = $_POST['notes'];


          $query = "INSERT INTO equipment(equipmentID, equipmentType, equipmentStatus,
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
