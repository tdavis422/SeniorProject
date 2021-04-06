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
			
<!<table class="table table-bordered table-hover">
  <!<thead>
   <!<tr>
      <!<th>Id<!</th>
      <!<th>Username<!</th>
      <!<th>Firstname<!</th>
      <!<th>Lastname<!</th>
      <!<th>Email<!</th>
      <!<th>Role<!</th>
    <!</tr>
  <!</thead>
  <!<tbody>

<!<tr>
  <!<td><<!?= $user_id ?><<!/td>
  <!<td><<!?= $username ?><<!/td>
  <!<td><<!?= $user_firstname ?><<!/td>
  <!<td><<!?= $user_lastname ?><<!/td>
  <!<td><<!?= $user_email ?><<!/td>
  <!<td><<!?= $user_role ?><<!/td>
  <!<td><<!a href='users.php?change_to_admin=<<!?= $user_id ?>'><!Admin</a><<!/td>
  <!<td><<!a href='users.php?change_to_worker=<<!?= $user_id ?>'><!Worker</a><<!/td>
  <!<td><<!a href='users.php?source=edit_user&edit_user=<<!?= $user_id ?>'><!Edit</a><<!/td>
  <!<td><<!a href='users.php?delete=<<!?= $user_id ?>'><!Delete</a><<!/td>
<!</tr>
<<!?php
}
<!?>
  <!</tbody>
<!</table>

<<!?php
if(isset($_GET['change_to_admin'])){
  $the_user_id = $_GET['change_to_admin'];
  $query = "UPDATE users SET user_role = 'admin' WHERE user_id = {$the_user_id}";
  $change_role_query = mysqli_query($connection, $query);
  header("Location: users.php");
}

if(isset($_GET['change_to_worker'])){
  $the_user_id = $_GET['change_to_worker'];
  $query = "UPDATE users SET user_role = 'worker' WHERE user_id = {$the_user_id}";
  $change_role_query = mysqli_query($connection, $query);
  header("Location: users.php");
}

if(isset($_GET['delete'])){
  $the_user_id = $_GET['delete'];
  $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
  $delete_user_query = mysqli_query($connection, $query);
  header("Location: users.php");
}
?>