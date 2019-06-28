<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  require_once('./auth.php');
  (new Auth())->render($_POST["token"]);
?>
</body>
</html>
