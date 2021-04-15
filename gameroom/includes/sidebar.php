<!-- This file is for what all users see after they log into the system.-->

<div class="col-md-4">

  <!-- Blog Search Well -->
  <div class="well">
    <h4>Post Search</h4>
    <form action="search.php" method="post">
    <div class="input-group">
      <input name="search" type="text" class="form-control">
      <span class="input-group-btn">
        <button name="submit" class="btn btn-default" type="submit">
          <span class="glyphicon glyphicon-search"></span>
      </button>
      </span>
    </div>
    </form><!--search form-->
    <!-- /.input-group -->
  </div>

  <!-- Login -->
  <div class="well">
    <h4>Worker/Admin Login</h4>
    <form action="includes/login.php" method="post">
      <div class="form-group">
      <input name="username" type="text" class="form-control" placeholder="Enter Username"/>
      </div>
      <div class="input-group">
        <input name="password" type="password" class="form-control" placeholder="Enter password"/>
        <span class="input-group-btn">
          <button name="login" class="btn btn-primary" type="submit">
            Submit
          </button>
        </span>
      </div>
    </form><!--search form-->
    <!-- /.input-group -->
  </div>

  <!--Student Login -->
  <div class="well">
    <h4>Student Login</h4>
    <form action="./includes/IDVerification.php" method="post">
      <div class="form-group">
        <input name="studentID" type="text" class="form-control" placeholder="Enter Student ID(Add a 0 before ID number)"/>
      </div>
      <span class="input-group-btn">
        <button name="studentLogin" class="btn btn-primary" type="submit">
          Submit
        </button>
      </span>
    </form><!--search form-->
  </div>
    <!-- /.input-group -->
</div>
