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
            