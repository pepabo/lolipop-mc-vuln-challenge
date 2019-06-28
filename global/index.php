<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  require_once('./auth.php');
  $auth = new Auth();
  $secret_token = $auth->generateToken();
  extract($_POST);
  $auth->render($token, $secret_token);
?>
</body>
</html>
