<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Equipment
        </h1>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Equipment Type</th>
              <th>Status</th>
              <th>Last Cleaned By</th>
              <th>Cost</th>
        	    <th>Date Added</th>
        	    <th>Date Removed From Use</th>
        	    <th>Notes</th>
        	    <th>Sanitize?</th>
        	    <th>Edit</th>
        	    <th>Remove From Use</th>
            </tr>
          </thead>
          <tbody>
        <?php
        $query = "SELECT * FROM equipment";
        $select_equipment = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_equipment)){
          $equipmentID = $row['equipmentID'];
          $equipmentType = $row['equipmentType'];
          $status = $row['equipmentStatus'];
          $lastCleanedBy = $row['lastCleanedBy'];
          $cost = $row['cost'];
          $dateAdded = $row['dateAdded'];
          $dateRemoved = $row['dateRemoved'];
          $notes = $row['notes'];
        ?>
        <tr>
          <td><?=$equipmentID?></td>
          <td><?=$equipmentType?></td>
          <td><?=$status?></td>
          <td><?=$lastCleanedBy?></td>
          <td><?=$cost?></td>
          <td><?=$dateAdded?></td>
          <td><?=$dateRemoved?></td>
          <td><?=$notes?></td>
          <td><a href='equipment.php?source=sanitize&sanitizeEquipment=<?= $equipmentID ?>'>Sanitize</a></td>
          <td><a href='equipment.php?source=edit&edit=<?= $equipmentID ?> '>Edit</a></td>
          <td><a href='equipment.php?source=remove_equipment&remove=<?= $equipmentID ?> '>Remove</a></td>
        </tr>
        <?php
        }
        ?>
          </tbody>
        </table>
