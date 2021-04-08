<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>checkoutsID</th>
      <th>equipmentID</th>
	  <th>equipmentType</th>
	  <th>Status</th>
      <th>studentID</th>
      <th>workerID</th>
      <th>timeOut</th>
      <th>timeIn</th>
	  <th>lastCleanedBy</th>
	  <th>cost</th>
    </tr>
  </thead>
  <tbody>

<?php
		$query = "SELECT * FROM equipment NATURAL JOIN checkouts";
		$select_equipment = mysqli_query($connection, $query);
			while($row = mysqli_fetch_assoc($select_equipment)){
				$checkoutsID = $row['checkoutsID'];
				$equipmentID = $row['equipmentID'];
				$equipmentType = $row['equipmentType'];
				$status = $row['equipmentStatus'];
				$studentID = $row['studentID'];
				$workerID = $row['workerID'];
				$timeOut = $row['timeOut'];
				$timeIn = $row['timeIn'];
				$lastCleanedBy = $row['lastCleanedBy'];
				$cost = $row['cost'];
?>
			<tr>
				<td><?= $checkoutsID ?></td>
                <td><?= $equipmentID ?></td>
				<td><?= $equipmentType ?></td>
				<td><?= $status ?></td>
                <td><?= $studentID ?></td>
                <td><?= $workerID ?></td>
                <td><?= $timeOut ?></td>
                <td><?= $timeIn ?></td>
				<td><?= $lastCleanedBy ?></td>
				<td><?= $cost ?></td>
		    </tr>
<?php
			}
?>
  </tbody>
</table>

        <form action="pingPong.php" method="post">
          <span class="input-group-btn">
            <button name="submitPingPong" class="btn btn-primary" type="submit">
             Ping Pong
            </button>	
          </span>
        </form><!--search form-->
		
        <form action="pool.php" method="post">
          <span class="input-group-btn">
            <button name="submitPool" class="btn btn-primary" type="submit">
             Pool  
            </button>
          </span>
        </form><!--search form-->
		
		<form action="foosball.php" method="post">
          <span class="input-group-btn">
            <button name="submitFoosball" class="btn btn-primary" type="submit">
             Foosball 
            </button>
          </span>
        </form><!--search form-->
		
		<form action="xbox.php" method="post">
          <span class="input-group-btn">
            <button name="submitXbox" class="btn btn-primary" type="submit">
             Xbox 
            </button>
          </span>
        </form><!--search form-->
		
		<form action="pc.php" method="post">
          <span class="input-group-btn">
            <button name="submitPC" class="btn btn-primary" type="submit">
             PC 
            </button>
          </span>
        </form><!--search form-->
		
		<form action="students.php" method="post">
          <span class="input-group-btn">
            <button name="submitStudents" class="btn btn-primary" type="submit">
             Students 
            </button>
          </span>
        </form><!--search form-->