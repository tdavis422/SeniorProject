<?php
  $equipmentID = $_SESSION['removeEquipment'];
?>
<script language="javascript">
  function removeEquipment()
  {
    var a;
    if(confirm("Are you sure you want to remove this equipment from use?"))
    {
      <?php
        $query = "UPDATE equipment SET";
        $query .= "dateRemoved = now(), ";
        $query .= "equipmentStatus = removed, ";
        $query .= "WHERE equipmentID = {$equipmentID}";
        mysqli_query($connection, $query);
      ?>
      alert("Removed equipment from use");
    }
    window.location.replace("equipment.php")
  }

  function ref()
  {
    alert("Redirecting to Equipment")
    window.location.replace("equipment.php")
  }
</script>
<p>Do you want to remove this equipment from use</p>
  <button type="button" name="confirm" onclick="removeEquipment()">Yes</button>
  <button type="button" name="deny" onclick="ref()">No</button>
