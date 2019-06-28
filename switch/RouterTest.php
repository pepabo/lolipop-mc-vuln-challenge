<?php

require('./router.php');
require_once('./vendor/autoload.php');

class RouterTest extends PHPUnit\Framework\TestCase {
  public function test_render() {
    $router = new Router();
    ob_start();
    $router->render("1");
    $actual = ob_get_clean();
    $this->assertEquals("This is page 1", $actual);

    ob_start();
    $router->render("2");
    $actual = ob_get_clean();
    $this->assertEquals("This is page 2", $actual);

    ob_start();
    $router->render("3");
    $actual = ob_get_clean();
    $this->assertEquals("Not Found", $actual);
  }
}
?>
