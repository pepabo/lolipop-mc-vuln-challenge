<?php

class Router
{
  public function render($id)
  {
    switch($id) {
    case 1:
      require_once $id . '.php';
      break;
    case 2:
      require_once $id . '.php';
      break;
    default:
      echo "Not Found";
      break;
    }
  }
}
?>
