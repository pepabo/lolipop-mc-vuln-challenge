<?php
 
require('./auth.php');
require_once('vendor/autoload.php');
 
class AuthTest extends PHPUnit\Framework\TestCase {
    public function test_isValid() {
        $auth = new Auth();
        $this->assertEquals(false, $auth->isValid('hogehoge'));
    }
}
