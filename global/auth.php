<?php


class Auth
{
  public function generateToken()
  {
    return "0e836584205638841937695747769655"; // 変更しないでください
  }

  public function isValid($token, $secret_token)
  {
    return $token === $secret_token;
  }

  public function render($token, $secret_token)
  {
    if ($this->isValid($token, $secret_token) === true) {
      echo "Authentication Success !";
    } else {
      echo "Access Denied...";
    }
  }
}
?>
