<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Author</th>
      <th>Comment</th>
      <th>Email</th>
      <th>Status</th>
      <th>In Response to</th>
      <th>Date</th>
      <th>Approve</th>
      <th>Unapprove</th>
      <th>Delete</th>

    </tr>
  </thead>
  <tbody>
<?php
$query = "SELECT * FROM comments";
$select_comments = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_comments)){
  $comment_id = $row['comment_id'];
  $comment_post_id = $row['comment_post_id'];
  $comment_author = $row['comment_author'];
  $comment_content = $row['comment_content'];
  $comment_email = $row['comment_email'];
  $comment_status = $row['comment_status'];
  $comment_date = $row['comment_date'];
?>
<tr>
  <td><?= $comment_id ?></td>
  <td><?= $comment_author ?></td>
  <td><?= $comment_content ?></td>
  <td><?= $comment_email ?></td>
  <td><?= $comment_status ?></td>
<?php
$query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
$select_post_id_query = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_post_id_query)){
  $post_id = $row['post_id'];
  $post_title = $row['post_title'];
}
 ?>
  <td><a href="../post.php?p_id=<?= $post_id ?>"><?= $post_title ?></a></td>
  <td><?= $comment_date ?></td>
  <td><a href='comments.php?approve=<?= $comment_id ?>'>Approve</a></td>
  <td><a href='comments.php?unapprove=<?= $comment_id ?>'>Unapprove</a></td>
  <td><a href='comments.php?delete=<?= $comment_id ?>'>Delete</a></td>
  </tr>
<?php
}
?>

  </tbody>
</table>

<?php
if(isset($_GET['approve'])){
  $the_comment_id = $_GET['approve'];
  $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = {$the_comment_id}";
  $unapprove_comment_query = mysqli_query($connection, $query);
  header("Location: comments.php");
}

if(isset($_GET['unapprove'])){
  $the_comment_id = $_GET['unapprove'];
  $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = {$the_comment_id}";
  $unapprove_comment_query = mysqli_query($connection, $query);
  header("Location: comments.php");
}


if(isset($_GET['delete'])){
  $the_user_id = $_GET['delete'];
  $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
  $delete_comment_query = mysqli_query($connection, $query);
  header("Location: comments.php");
}
?>
