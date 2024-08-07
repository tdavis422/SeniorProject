<!-- This file is for what happens when you want to make a post.--> 

<?php
if(isset($_POST['create_post'])){
  $post_author = $_POST['author'];
  $post_title = $_POST['title'];
  $post_category_id = $_POST['post_category'];
  $post_status = $_POST['post_status'];

  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];

  $post_tags = $_POST['post_tags'];
  $post_content = $_POST['post_content'];
  $post_date = date('d-m-y');
  $post_comment_count = 0;

  move_uploaded_file($post_image_temp, "../images/$post_image");

  $query = "INSERT INTO posts(post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
  $query .= "VALUES('{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}')";

  global $connection;
  $create_post_query = mysqli_query($connection, $query);
  confirm_query($create_post_query);
  $the_post_id = mysqli_insert_id($connection);
?>

  <p class="bg-success">
  Post Created. <a href="../post.php?p_id=<?=$the_post_id?>">View Post</a> or
  <a href='posts.php'>Edit More Posts</a>

<?php
}
?>

<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="title">
  </div>

  <div class="form-group">
    <label for="post_author">Post Author</label>
    <input type="text" class="form-control" name="author">
  </div>

  <div class="form-group">
    <select name="post_status" id="">
      <option value="draft">Post Status</option>
      <option value="published">Published</option>
      <option value="draft">Draft</option>
    </select>

  </div>

  <div class="form-group">
    <label for="post_image">Post Image</label>
    <input type="file" name="image">
  </div>

  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
  </div>

  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea type="text" class="form-control" name="post_content" id="editor"
      cols="30" rols="10"></textarea>
  </div>

  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_post"
      value="Publish Post">
  </div>
</form>
