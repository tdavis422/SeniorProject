<?php
  $username = $_SESSION['username'];
  $equipmentID = $_GET['sanitizeEquipment'];
?>
<script language="javascript">
  function sanitizeEquipment()
  {
    var a;
    if(confirm("Are you sure you sanitized the equipment
                and checked for damage?"))
    {
      <?php
        $query = "UPDATE equipment SET ";
        $query .= "equipmentStatus = ready, ";
        $query .= "lastCleanedBy = '{$username}' ";
        $query .= "WHERE equipmentID = '{$equipmentID}'";
        $sanitize_query = mysqli_query($connection, $query);
        confirm_query($sanitize_query);
      ?>
      alert("Sanitation and damage check complete. Redirecting to Equipment");
    }
    window.location.replace("../equipment.php")
  }

  function damagedEquipment()
  {
    var a;
    if(confirm("Are you sure this equipment is damaged?"))
    {
      <?php
        $query = "UPDATE equipment SET";
        $query .= "equipmentStatus = damaged, ";
        $query .= "lastCleanedBy = '{$username}' ";
        $query .= "WHERE equipmentID = '{$equipmentID}'";
        $damage_query = mysqli_query($connection, $query);
        confirm_query($damage_query);
      ?>
      alert("Equipment marked as damaged.
             Redirecting to Equipment");
    }
    window.location.replace("../equipment.php")
  }

  function ref()
  {
    alert("Redirecting to Equipment")
    window.location.replace("../equipment.php")
  }
</script>
<p>
  Have you sanitized and checked for damage?
</p>
<button type="button" name="confirm" onclick="sanitizeEquipment()">Sanitize</button>
<button type="button" name="confirm" onclick="damagedEquipment()">Damaged</button>
<button type="button" name="deny" onclick="ref()">No</button>
