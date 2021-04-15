<?php include "includes/student_header.php" ?>
<!-- This code will allow the student to select that they are at the gameroom with a friend and are checking in for it -->
<div id="wrapper">

<?php include "includes/student_navigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            <small><?=$_SESSION['studentID']?></small>
          </h1>
        </div>
      </div>

      <div class="well">
        <form action="add_student.php" method="post">
          <div class="form-group">
            <input name="friends" type="text" class="form-control" autofocus placeholder="Enter Student ID"/>
          </div>
          <span class="input-group-btn">
            <button name="submitFriend" class="btn btn-primary" type="submit">
              Submit
            </button>
          </span>
        </form><!--search form-->
      </div>

    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php include "includes/student_footer.php" ?>
