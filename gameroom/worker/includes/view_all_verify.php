<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Date</th>
      <th>Time Checked Out</th>
      <th>studentID</th>
      <th>equipmentID</th>
      <th>Approve</th>
      <th>Unapprove</th>
    </tr>
  </thead>
  <tbody>
<?php
$query = "SELECT * FROM verifystudents";
$select_students = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_students)){
  $verifyID = $row['verifyID'];
  $date = $row['date'];
  $timeout = $row['timeOut'];
  $studentID = $row['studentID'];
  $equipmentID = $row['equipmentID'];

?>
<tr>
  <td><?= $verifyID ?></td>
  <td><?= $date ?></td>
  <td><?= $timeout ?></td>
  <td><?= $studentID ?></td>
  <td><?= $equipmentID ?></td>
  <td><a href='verifyStudents.php?approve=<?= $verifyID ?>'>Approve</a></td>
  <td><a href='verifyStudents.php?unapprove=<?= $verifyID ?>'>Unapprove</a></td>
  </tr>
<?php
}
?>

  </tbody>
</table>

<?php
if(isset($_GET['approve'])){
  $id = $_GET['approve'];
  $username = $_SESSION['username'];
  $approve_query = "INSERT INTO checkouts(dateUsed, equipmentID, studentID, workerID, timeOut)";
  $approve_query .= "VALUES('{$date}', '{$equipmentID}', '{$studentID}', '{$username}', '{$timeout}')";
  $approve_student_query = mysqli_query($connection, $approve_query);
  confirm_query($approve_student_query);
  $update_query = "UPDATE equipment SET equipmentStatus = 'In Use' WHERE equipmentID = $equipmentID";
  $update_sent_query = mysqli_query($connection, $update_query);
  confirm_query($update_sent_query);
  $query = "DELETE FROM verifystudents WHERE verifyID = $id";
  $update_verify_query = mysqli_query($connection, $query);
  confirm_query($update_verify_query);
  header("Location: verifyStudents.php");
}

if(isset($_GET['unapprove'])){
  $id = $_GET['unapprove'];
  $query = "DELETE FROM verifystudents WHERE verifyID = $id";
  $unapprove_student_query = mysqli_query($connection, $query);
  header("Location: verifyStudents.php");
}
?>
