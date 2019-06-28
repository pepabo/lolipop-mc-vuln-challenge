<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  require "./template.php";
  echo (new Template())->render($_POST["url"]);
?>
</body>
</html>
