<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Equipment
        </h1>
        <?php
        if(isset($_GET['sanitize'])){
          $the_equipment_id = $_GET['sanitizeEquipment'];
          $query = "SELECT * FROM equipment WHERE equipmentID = $the_equipment_id ";
          $select_equipment_query = mysqli_query($connection, $query);
          confirm_query($select_equipment_query);
        }
        ?>
        <div id="page-wrapper">
          <div class="container-fluid">
          <!-- Page Heading -->
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">
                Sanitize and Check For Damage
              </h1>
            <script language="javascript">
              function sanitizeEquipment()
              {
                if(confirm("Are you sure you sanitized the equipment
                            and checked for any damage?"))
                {
                  <?php
                    $query = "UPDATE equipment SET";
                    $query := "equipmentStatus = ready";
                    $query := "lastCleanedBy = $_SESSION['username']";
                    $query := "WHERE equipmentID = {$the_equipment_id}";
                    mysqli_query($connection, $query);
                  ?>
                  alert("Sanitation and damage check complete.
                         Redirecting to Equipment.");
                }
                window.location.replace("../equipment.php");
              }

              function damaged()
              {
                var a;
                if(confirm("Are you sure this equipment is damaged?"))
                {
                  <?php
                    $query = "UPDATE equipment SET";
                    $query := "equipmentStatus = damaged";
                    $query := "lastCleanedBy = $_SESSION['username']";
                    $query := "WHERE equipmentID={$the_equipment_id}";
                    mysqli_query($connection, $query);
                  ?>
                  alert("Equipment marked as damaged.
                         Redirecting to Equipment.");
                }
                window.location.replace("../equipment.php");
              }

              function ref()
              {
                alert("Redirecting to Equipment")
                window.location.replace("../equipment.php")
              }
            </script>

            <button type="button" name="confirm" onclick="sanitizeEquipment()">Sanitize</button>
            <button type="button" name="confirm" onClick="damaged()">Damaged</button>
            <button type="button" name="deny" onclick="ref()">No</button>

            </div>

          </div>
