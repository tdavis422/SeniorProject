<?php
include "delete_modal.php";

if(isset($_POST['checkBoxArray'])){
  foreach($_POST['checkBoxArray'] as $post_id){
    $bulk_options = $_POST['bulk_options'];
    switch($bulk_options){
      case 'published':
        $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = $post_id";
        $update_to_published_status = mysqli_query($connection, $query);
        confirm_query($update_to_published_status);
        break;
      case 'draft':
        $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = $post_id";
        $update_to_draft_status = mysqli_query($connection, $query);
        confirm_query($update_to_draft_status);
        break;
      case 'delete':
        $query = "DELETE FROM posts WHERE post_id = $post_id";
        $update_to_delete_status = mysqli_query($connection, $query);
        confirm_query($update_to_delete_status);
        break;
      case 'clone':
        $query = "SELECT * FROM posts WHERE post_id = $post_id";
        $select_post_by_id = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_post_by_id)){
          $post_id = $row['post_id'];
          $post_author = $row['post_author'];
          $post_title = $row['post_title'];
          $post_status = $row['post_status'];
          $post_image = $row['post_image'];
          $post_content = $row['post_content'];
          $post_tags = $row['post_tags'];
          $post_comment_count = $row['post_comment_count'];
          $post_date = $row['post_date'];
        }

        $query = "INSERT INTO posts(post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
        $query .= "VALUES('{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}')";
        $insert_posts = mysqli_query($connection, $query);
        confirm_query($insert_posts);
        break;
    }
  }
}
?>

<form action="" method="post">
<table class="table table-bordered table-hover">
  <div id="bulkOptionsContainer" class="col-xs-4">
    <select class="form-control" name="bulk_options" id="">
      <option value="">Select Options</option>
      <option value="published">Published</option>
      <option value="draft">Draft</option>
      <option value="delete">Delete</option>
      <option value="clone">Clone</option>
    </select>
  </div>
  <div class="col-xs-4">
    <input type="submit" name="submit" class="btn btn-success" value="Apply">
    <a class="btn btn-primary" href="posts.php?source=add_post">Add New</a>
  </div>
  <thead>
    <tr>
      <th><input type="checkbox" id="selectAllBoxes"></th>
      <th>Id</th>
      <th>Author</th>
      <th>Title</th>
      <th>Status</th>
      <th>Image</th>
      <th>Tags</th>
      <th>Comments</th>
      <th>Date</th>
      <th>View Post</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
<?php
$query = "SELECT * FROM posts ORDER BY post_id DESC";
$select_posts = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_posts)){
  $post_id = $row['post_id'];
  $post_author = $row['post_author'];
  $post_title = $row['post_title'];
  $post_category_id = $row['post_category_id'];
  $post_status = $row['post_status'];
  $post_image = $row['post_image'];
  $post_tags = $row['post_tags'];
  $post_comment_count = $row['post_comment_count'];
  $post_date = $row['post_date'];
?>
<tr>
  <td><input type="checkbox" class="checkBoxes" name="checkBoxArray[]" value="<?=$post_id?>"></td>
  <td><?= $post_id ?></td>
  <td><?= $post_author ?></td>
  <td><?= $post_title ?></td>
  <td><?= $post_status ?></td>
  <td><img class = 'img-responsive' src = '../images/<?= $post_image ?>'</img></td>
  <td><?= $post_tags ?></td>
  <td><?= $post_comment_count ?></td>
  <td><?= $post_date ?></td>
  <td><a href='../post.php?p_id=<?= $post_id ?>'>View Post</a></td>
  <td><a href='posts.php?source=edit_post&p_id=<?= $post_id ?>'>Edit</a></td>
  <td><a href='javacript:void(0)' rel="<?= $post_id ?>" class="delete_link">Delete</a></td>
  </tr>
<?php
}
?>

  </tbody>
</table>
</form>

<?php
if(isset($_GET['delete'])){
  $the_post_id = $_GET['delete'];
  $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
  $delete_query = mysqli_query($connection, $query);
  header("Location: posts.php");
}
?>

<script>
$(document).ready(function(){
  $(".delete_link").on("click", function(){
    var id = $(this).attr("rel");
    var delete_url = "posts.php?delete="+id;
    $(".modal_delete_link").attr("href", delete_url);
    $("#myModal").modal("show");
  });
});
</script>
