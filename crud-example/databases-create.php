<?php 
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "topsikmuhv";
	$dbname = "widget_corp";
	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (mysqli_connect_errno()) {
			die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
	}
	$query = "INSERT INTO subjects (menu_name, position, visible)
            VALUES ('Olen uus teema', 4, 1)";
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
  if ($result) {
    echo "Õnnestus";
  } else {
    echo "Ebaõnnestus";
  }
?>
	</pre>
  </body>
</html>
<?php mysqli_close($connect);?>