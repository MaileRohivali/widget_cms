<?php 
  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "topsikmuhv";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if (mysqli_connect_errno()) {
      die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").");
  }

  $menu_name = $_POST['menu_name'];
  $position = $_POST['position'];
  $visible = $_POST['visible'];

  $query = "INSERT INTO subjects (menu_name, position, visible)
            VALUES ('{$menu_name}', {$position}, {$visible})";
  $result = mysqli_query($connection, $query);
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <pre>
      <?php print_r($_POST);?>
    </pre>
    <form action="databases_create.php" method="post">
      <input name="menu_name">
      <input name="position">
      <input name="visible">
      <input type="submit">
    </form>
  </body>
</html>

<?php mysqli_close($connection);?>