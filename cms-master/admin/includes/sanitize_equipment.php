<?php
  $username = $_SESSION['username'];
  $equipmentID = $_GET['sanitizeEquipment'];
?>
<script language="javascript">
  function sanitize()
  {
    var a;
    if(confirm("Are you sure you sanitized the equipment
                and checked for damage?"))
    {
      <?php
        $query = "UPDATE equipment SET equipmentStatus = ready, lastCleanedBy = '{$username}' WHERE equipmentID = {$equipmentID}";
        mysqli_query($connection, $query);
      ?>
      alert("Sanitation and damage check complete. Redirecting to Equipment");
    }
    window.location.replace("../equipment.php")
  }

  function damaged()
  {
    var a;
    if(confirm("Are you sure this equipment is damaged?"))
    {
      <?php
        $query = "UPDATE equipment SET equipmentStatus = damaged, lastCleanedBy = '{$username}' WHERE equipmentID = {$equipmentID}";
        mysqli_query($connection, $query);
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
<button type="button" name="confirm" onclick="sanitize()">Sanitize</button>
<button type="button" name="confirm" onclick="damaged()">Damaged</button>
<button type="button" onclick="ref()">No</button>
