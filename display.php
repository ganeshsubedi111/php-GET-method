<!DOCTYPE html>
<html>
<head>
  <title>Display Data</title>
</head>
<body>
  <?php
  // Retrieve the data submitted via GET method
  $name = $_GET['name'];
  $email = $_GET['email'];
  $phone = $_GET['phone'];

  // Display the data in HTML
  echo "<h1>Hello $name!.<br><br></h1>";
  echo "<h1>Hello $email!.<br></h1>";
  echo "<h1>Hello $phone!.<br></h1>";
  ?>
</body>
</html>
