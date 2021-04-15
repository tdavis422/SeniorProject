<!-- This file is for what happens when the admin wants to update a piece of equipment from dirty to clean.-->

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
        $sanitize_query = "UPDATE equipment SET equipmentStatus = 'sanitized', lastCleanedBy = '{$username}' WHERE equipmentID = $equipmentID";
        $sanQuery = mysqli_query($connection, $sanitize_query);
        confirm_query($sanQuery);
      ?>
      alert("Sanitation and damage check complete. Redirecting to Equipment");
    }
    window.location.replace("./equipment.php");
  }

  function ref()
  {
    alert("Returning to Equipment Dashboard");
    window.location.replace("./equipment.php");
  }
</script>
<p> Have you sanitized and checked for damage? </p>
<button type="button" name="sanitize" onClick="sanitize()">Yes</button>
<button type="button" name="no" onclick="ref()">No</button>
