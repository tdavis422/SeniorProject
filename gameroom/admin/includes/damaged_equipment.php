<!-- This file is for what happens when the admin wants to report a piece of equipment is damaged.-->

<?php
$username = $_SESSION['username'];
$equipmentID = $_GET['damagedID'];
?>
<script language="javascript">
  function damaged()
  {
    if(confirm("Are you sure this equipment is damaged?"))
    {
      <?php
        $query = "UPDATE equipment SET equipmentStatus = 'damaged', lastCleanedBy = '{$username}' WHERE equipmentID = $equipmentID";
        $damageQuery = mysqli_query($connection, $query);
        confirm_query($damageQuery);
      ?>
      alert("Equipment marked as damaged. Redirecting to Equipment");
    }
    window.location.replace("./equipment.php");
  };

  function ref()
  {
    alert("Returning to Equipment Dashboard");
    window.location.replace("./equipment.php");
  }
</script>
<p> Have you sanitized and checked for damage? </p>
<button type="button" name="sanitize" onClick="damaged()">Yes</button>
<button type="button" name="no" onclick="ref()">No</button>
