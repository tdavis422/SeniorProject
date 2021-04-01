<?php
		$query = "SELECT * FROM equipment NATURAL JOIN checkouts WHERE equipment.equipmentType = $requestedID";
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
			<button>Ping Pong</button>

            <a href= "report.php">
			<button>Pool</button>
			
            <a href= "report.php">
			<button>Foosball</button>
			
			<a href= "report.php">
			<button>Xbox</button>
			
			<a href= "report.php">
			<button>PC</button>
			
			<a href= "report.php">
			<button>Students</button>
			