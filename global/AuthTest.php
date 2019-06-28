<?php

require('./auth.php');
require_once('vendor/autoload.php');

class AuthTest extends PHPUnit\Framework\TestCase {
  public function test_isValid() {
    $auth = new Auth();
    $secret_token = $auth->generateToken();
    $token = $secret_token;    
    $this->assertEquals(true, $auth->isValid($token, $secret_token));
    $this->assertEquals(false, $auth->isValid("123", $secret_token));
  }
}
?>
