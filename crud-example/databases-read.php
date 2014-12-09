<?php 
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "topsikmuhv";
	$dbname = "widget_corp";
	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (mysqli_connect_errno()) {
			die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
	}
	$query = "SELECT * FROM subjects";
	$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
  	<pre>
	<?php
 	  while ($row = mysqli_fetch_assoc($result)) {
    	echo "<h1>" . $row['menu_name'] . "</h1>";
  	}
	?>
	</pre>
  </body>
</html>
<?php mysqli_close($connect);?>