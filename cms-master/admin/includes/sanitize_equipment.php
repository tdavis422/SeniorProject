<?php
  $username = $_SESSION['username'];
  $equipmentID = $_GET['sanitizeE'];
?>
<script language="javascript">


  function sanitize()
  {
    if(confirm("Are you sure you sanitized the equipment and checked for damage?"))
    {
      <?php
        $sanitize_query = "UPDATE equipment SET equipmentStatus = 'sanitized', lastCleanedBy = '{$username}' WHERE equipmentID = {$equipmentID}";
        $sanQuery = mysqli_query($connection, $sanitize_query);
        confirm_query($sanQuery);
      ?>
      alert("Sanitation and damage check complete. Redirecting to Equipment");
    }
    window.location.replace("./equipment.php");
  }

  function damaged()
  {
    if(confirm("Are you sure this equipment is damaged?"))
    {
      <?php
        $query = "UPDATE equipment SET equipmentStatus = 'damaged', lastCleanedBy = '{$username}' WHERE equipmentID = {$equipmentID}";
        $damageQuery = mysqli_query($connection, $query);
        confirm_query($damageQuery);
      ?>
      console.log("Pass");
      alert("Equipment marked as damaged. Redirecting to Equipment");
    }
    window.location.replace("./equipment.php");
  }

  function ref()
  {
    alert("Redirecting to Equipment")
    window.location.replace("./equipment.php")
  }
</script>
<p> Have you sanitized and checked for damage? </p>
<button type="button" name="sanitize" onclick="sanitize()">Sanitize</button>
<button type="button" name="damaged" onclick="damaged()">Damaged</button>
<button type="button" name="no" onclick="ref()">No</button>
