<?php

class Auth
{
  private const SECRET_TOKEN = "0e836584205638841937695747769655"; // 変更しないでください

  public function isValid($token)
  {
    return md5($token) == $this::SECRET_TOKEN;
  }

  public function render($token)
  {
    if ($this->isValid($token) === true) {
      echo "Authentication Success !";
    } else {
      echo "Access Denied...";
    }
  }
}

?>
