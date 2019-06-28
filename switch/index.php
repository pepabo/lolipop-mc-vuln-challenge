<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  $page_id = $_POST['page'];
  require_once('./router.php');
  (new Router())->render($page_id);
?>
</body>
</html>
