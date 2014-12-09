<?php 
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "topsikmuhv";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (mysqli_connect_errno()) {
			die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
	}
	$query = "SELECT * FROM subjects";
	$result = mysqli_query($connection, $query);
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
  	<ul>
	<?php
	while ($subject = mysqli_fetch_assoc($result)) { ?>
		<li> <?php echo $subject['menu_name']; ?></li>
	<?php }	?>
	</ul>
  </body>
</html>
<?php mysqli_free_result($result);?>
<?php mysqli_close($connection);?>