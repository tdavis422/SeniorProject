<?php
if(isset($_GET['remove_equipment'])){
  $the_equipment_id = $_GET['remove'];
  $query = "UPDATE equipment
            SET equipmentStatus = 'removed'
            WHERE equipmentID = {$the_equipment_ID} ";
  $remove_equipment_query = mysqli_query($connection, $query);
  header("Location: equipment.php");
}
?>
