<?php include "includes/admin_header.php" ?>

<div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Welcome to admin
            <small><?=$_SESSION['username']?></small>
          </h1>
        </div>
      </div>

      <!-- /.row -->
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-file-text fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
<?php
$query = "SELECT * FROM posts";
$select_all_post = mysqli_query($connection, $query);
$post_count = mysqli_num_rows($select_all_post);
?>
                <div class='huge'><?=$post_count?></div>
                <div>Posts</div>
              </div>
            </div>
          </div>
          <a href="posts.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-comments fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
<?php
$query = "SELECT * FROM comments";
$select_all_comments = mysqli_query($connection, $query);
$comment_count = mysqli_num_rows($select_all_comments);
?>
                  <div class='huge'><?=$comment_count?></div>
                  <div>Comments</div>
                </div>
              </div>
            </div>
            <a href="comments.php">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-yellow">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
<?php
$query = "SELECT * FROM users";
$select_all_users = mysqli_query($connection, $query);
$user_count = mysqli_num_rows($select_all_users);
?>
                  <div class='huge'><?=$user_count?></div>
                  <div> Users</div>
                </div>
              </div>
            </div>
            <a href="users.php">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-purple">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-list fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
<?php
$query = "SELECT * FROM verifystudents";
$select_all_students = mysqli_query($connection, $query);
$student_count = mysqli_num_rows($select_all_students);
?>
                  <div class='huge'><?=$student_count?></div>
                  <div>Verify Students</div>
                </div>
              </div>
            </div>
            <a href="verifyStudents.php">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- /.row -->
<?php
$query = "SELECT * FROM checkouts NATURAL JOIN equipment";
$select_all_checkouts = mysqli_query($connection, $query);
$checkouts = mysqli_num_rows($select_all_checkouts);

$query = "SELECT * FROM checkouts NATURAL JOIN equipment WHERE equipmentType = '1'";
$select_all_pingPong = mysqli_query($connection, $query);
$pingPong = mysqli_num_rows($select_all_pingPong);

$query = "SELECT * FROM checkouts NATURAL JOIN equipment WHERE equipmentType = '2'";
$select_all_pool = mysqli_query($connection, $query);
$pool = mysqli_num_rows($select_all_pool);

$query = "SELECT * FROM checkouts NATURAL JOIN equipment WHERE equipmentType = '3'";
$select_all_foosball = mysqli_query($connection, $query);
$foosball = mysqli_num_rows($select_all_foosball);

$query = "SELECT * FROM checkouts NATURAL JOIN equipment WHERE equipmentType = '4'";
$select_all_xbox = mysqli_query($connection, $query);
$xbox = mysqli_num_rows($select_all_xbox);

$query = "SELECT * FROM checkouts NATURAL JOIN equipment WHERE equipmentType = '5'";
$select_all_pc = mysqli_query($connection, $query);
$pc = mysqli_num_rows($select_all_pc);

$query = "SELECT * FROM checkouts NATURAL JOIN equipment WHERE equipmentType = '6'";
$select_all_friends = mysqli_query($connection, $query);
$friends = mysqli_num_rows($select_all_friends);

 ?>
      <!--<script type="text/javascript">
         google.charts.load('current', {'packages':['bar']});
         google.charts.setOnLoadCallback(drawChart);

         function drawChart() {
           var data = google.visualization.arrayToDataTable([
             ['Data', 'Count'],
<?php
/*$element_text = ['All Students', 'Ping Pong', 'Pool', 'Foosball', 'Xbox', 'PC', 'Friends'];
$element_count = [$post_count, $published_post_count, $draft_post_count, $comment_count, $unapproved_comment_count, $user_count, $subscriber_count];
for($i=0; $i<8; $i++){
?>
  ['<?=$element_text[$i]?>', <?=$element_count[$i]?>],
<?php
}*/
?>
<!--           ]);

           /*var options = {
             chart: {
               title: '',
               subtitle: '',
             }
           };

           var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

           chart.draw(data, google.charts.Bar.convertOptions(options));
         }*/
       <!--</script>-->
       <div id="columnchart_material" style="width: auto; height: 500px;"></div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include "includes/admin_footer.php" ?>
