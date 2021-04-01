<?php include "includes/admin_header.php" ?>
<?php include "functions.php" ?>

<div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Do you want to create a report for all checkouts?
            <small><?=$_SESSION['username']?></small>
          </h1>
<?php
			$query = "SELECT * FROM equipment NATURAL JOIN checkouts";
			$select_equipment = mysqli_query($connection, $query);
			while($row = mysqli_fetch_assoc($select_equipment)){
				$equipment_id = $row['equipmentID'];
				$equipment_type = $row['equipmentType'];
				$status = $row['equipmentStatus'];
				$lastCleanedBy = $row['lastCleanedBy'];
				$cost = $row['cost'];
?>
			<tr>
				<td><?=$equipment_id?></td>
				<td><?=$equipment_type?></td>
				<td><?=$status?></td>
				<td><?=$lastCleanedBy?></td>
				<td><?=$cost?></td>
		   </tr>
<?php
			 }
?>
            <a href= "report.php">
			<button>Yes</button>

            <a href= "report.php">
			<button>No</button>

        </div>
      </div>
            <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php" ?>
