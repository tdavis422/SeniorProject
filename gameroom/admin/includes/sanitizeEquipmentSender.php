<?php
if(isset($_POST['sanitize'])){
  $sanitize_query = "UPDATE equipment SET equipmentStatus = 'sanitized', lastCleanedBy = '{$username}' WHERE equipmentID = $equipmentID";
  $sanQuery = mysqli_query($connection, $sanitize_query);
  confirm_query($sanQuery);
  header("Location: equipment.php");
}
?>
