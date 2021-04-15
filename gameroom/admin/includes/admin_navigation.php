<!-- This file is for showing what the admin sees on the sidebar.-->

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Gameroom Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../index.php">HOME SITE</a></li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
<?php
if(isset($_SESSION['username'])){
  echo $_SESSION['username'];
}
?>
            <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa fa-fw fa-file"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts_dropdown" class="collapse">
                    <li>
                        <a href="posts.php">View All Posts</a>
                    </li>
                    <li>
                        <a href="posts.php?source=add_post">Add Posts</a>
                    </li>
                </ul>
            </li>

            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#reports_dropdown"><i class="fa fa-fw fa-file"></i> Reports <i class="fa fa-fw fa-caret-down"></i></a>
      				<ul id="reports_dropdown" class="collapse">
      					<li>
      						<a href="report.php?source=allReport"> Create Report(All) </a>
      					</li>
      					<li>
      						<a href="report.php?source=specReport"> Create Report(Specific) </a>
      					</li>
      				</ul>
            </li>

      			<li>
      				<a href="javascript:;" data-toggle="collapse" data-target="#equipment_dropdown"><i class="fa fa-fw fa-wrench"></i> Equipment <i class="fa fa-fw fa-caret-down"></i></a>
      				<ul id="equipment_dropdown" class="collapse">
      					<li>
      						<a href="equipment.php"> View All Equipment </a>
      					</li>
      					<li>
      						<a href="equipment.php?source=add_equipment"> Add Equipment </a>
      					</li>
      					<li>
      						<a href="equipment.php?source=add_type"> Add Equipment Type </a>
      					</li>
      				</ul>
      			</li>

            <li>

                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="users.php">View All Users</a>
                    </li>
                    <li>
                        <a href="users.php?source=add_user">Add User</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="verifyStudents.php"><i class="fa fa-fw fa-arrows-v"></i> Verify Students </a>
            </li>

            <li class="">
                <a href="comments.php"><i class="fa fa-fw fa-file"></i> Comments </a>
            </li>
            <li>
                <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile </a>
            </li>
			<li>
				<a href="cleardatabase.php"><i class="fa fa-fw fa-wrench"></i> Clear Database </a>
			</li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>