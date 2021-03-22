<!DOCTYPE html>
<html lang="en">
<?php include "includes/admin_header.php" ?>
<?php include "functions.php" ?>

<div id="wrapper">

<?php include "includes/admin_navigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Do you want to clear the database?
					<small><?=$_SESSION['username']?></small>
				</h1>
			<script language="javascript">
				function clearData()
				{
					var a;
					if(confirm("Are you sure you want to clear the checkouts of the database?"))
					{
						<?php
							$query = "TRUNCATE TABLE `checkouts`";// + checkouts FROM INFORMATION_SCHEMA>TABLES WHERE TABLE_SCHEMA = 'cms'";
							mysqli_query($connection, $query);
						?>
						alert("Emptyed the checkouts table and redirecting to dashboard");


					}
          window.location.replace("index.php")
				}

				function ref()
				{
					alert("Redirecting to Admin Dashboard")
					window.location.replace("index.php")
				}
			</script>

			<button type="button" name="confirm" onclick="clearData()">Yes</button>
			<button type="button" name="deny" onclick="ref()">No</button>

			</div>

		</div>




<?php include "includes/admin_footer.php" ?>



<!--

						////<?php //$query = "SELECT 'TRUNCATE TABLE' + checkouts FROM INFORMATION_SCHEMA>TABLES WHERE TABLE_SCHEMA = 'cms'"; ?>

						//if((<?php //mysql_query($connection, $query); ?>) != null)
						{
							alert("Check-ins have be cleared and redirecting to Admin Dashboard")
								window.location.href = "index.php";
						} else
						{
							alert("Could not clear the database");
						}



							//These are some the attempts in no certain order
							$pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
							$sql = "TRUNCATE TABLE 'checkouts'";
							mysql_query($connection, $sql);
							$stmt = $connection->prepare($sql);
							echo "<h2>" . $txt1 . "</h2>";
							$stmt->execute($stmt);


							/////This is the code that is used to define the $connection variable
							$db['db_host'] = "localhost";
							$db['db_user'] = "root";
							$db['db_pass'] = "";
							$db['db_name'] = "cms";

							foreach($db as $key => $value)
							{
								define(strtoupper($key), $value);
							}

							$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
							if($connection)
							{
								//echo "We are connected";
							}




-->
