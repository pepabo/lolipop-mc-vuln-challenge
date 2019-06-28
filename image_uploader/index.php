<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
require_once("./image.php");

$url = $_POST['url'];
$image = new Image();

$result = $image->getImageSize($url);

if ($image->validateImage($result['mime'])) {
  $image->upload($url);
} else {
  echo "Invalid";
}
?>
</body>
</html>
