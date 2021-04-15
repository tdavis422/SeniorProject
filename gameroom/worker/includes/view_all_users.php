<!-- This file is for allowing the workers to see all users in the system.-->

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Username</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
<?php
$query = "SELECT * FROM users";
$select_users = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_users)){
  $user_id = $row['user_id'];
  $username = $row['username'];
  $user_firstname = $row['user_firstname'];
  $user_lastname = $row['user_lastname'];
  $user_email = $row['user_email'];
  $user_image = $row['user_image'];
?>
<tr>
  <td><?= $user_id ?></td>
  <td><?= $username ?></td>
  <td><?= $user_firstname ?></td>
  <td><?= $user_lastname ?></td>
  <td><?= $user_email ?></td>
</tr>
<?php
}
?>
  </tbody>
</table>

