<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
  <!-- Navigation -->
  <?php include "includes/navigation.php"; ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

<?php
$post_count_query = "SELECT * FROM posts WHERE post_status = 'published'";
$find_count = mysqli_query($connection, $post_count_query);
$count = mysqli_num_rows($find_count);
$per_page = 5;
$count = ceil($count/$per_page);

if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = 1;
}
if($page == "" || $page == 1){
  $page_1 = 0;
}else{
  $page_1 = ($page - 1) * $per_page;
}

$query = "SELECT * FROM posts WHERE post_status = 'published' LIMIT $page_1, $per_page";
$select_all_posts_query = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_all_posts_query)){
  $post_id = $row['post_id'];
  $post_title = $row['post_title'];
  $post_author = $row['post_author'];
  $post_date = $row['post_date'];
  $post_image = $row['post_image'];
  $post_content = substr($row['post_content'], 0, 100);
?>

        <!-- First Blog Post -->
        <h2>
          <a href="post.php?p_id=<?= $post_id ?>"><?=$post_title?></a>
        </h2>
        <p class="lead">
          by <a href="author_posts.php?author=<?=$post_author?>&p_id=<?= $post_id ?>"><?=$post_author?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?=$post_date?></p>
        <hr>
        <a href="post.php?p_id=<?= $post_id ?>">
          <img class="img-responsive" src="images/<?=$post_image?>" alt="">
        </a>
        <hr>
        <p><?=$post_content?></p>
        <a class="btn btn-primary" href="post.php?p_id=<?= $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <?php
          }
        ?>
      </div>
      <!-- Blog Sidebar Widgets Column -->
      <?php include "includes/sidebar.php"; ?>
    <!-- /.row -->

    <hr>
    <ul class="pager">
<?php
for($i=1; $i<=$count; $i++){
  if($i == $page){
?>
    <li><a class="active_link" href="index.php?page=<?=$i?>"><?=$i?></a></li>
<?php
  }else{
?>
    <li><a href="index.php?page=<?=$i?>"><?=$i?></a></li>
<?php
  }
}
?>
    </ul>
<?php include "includes/footer.php"; ?>
