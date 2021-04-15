<!-- This file is for allowing workers to change a piece of equipment's status from being usable to not usable.-->

<?php
//Pulls the equipment ID from the sending page
  $equipmentID = $_GET['removeEquipment'];
?>
<script language="javascript">
  function removeEquipment()
  {
    //Confirms if admin does want to remove the equipment from use
    if(confirm("Are you sure you want to remove this equipment from use?"))
    {
      <?php
      //Sends query to database to set the status removal date to removed
        $query = "UPDATE equipment SET equipmentStatus = 'removed', dateRemoved = CURDATE() WHERE equipmentID = '{$equipmentID}'";
        $remove_query = mysqli_query($connection, $query);
      ?>
      //Sends an alert box to let the admin know that the equipment was successfully removed
      alert("Removed equipment from use");
    }
    //Sends the admin back to the equipment screen
    window.location.replace("equipment.php");
  }

  function ref()
  {
    alert("Redirecting to Equipment");
    window.location.replace("equipment.php");
  }
</script>
<p>Do you want to remove this equipment from use?</p>
  <button type="button" name="confirm" onclick="removeEquipment()">Yes</button>
  <button type="button" name="deny" onclick="ref()">No</button>
