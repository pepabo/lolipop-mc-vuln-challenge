<?php

require('./template.php');
require_once('vendor/autoload.php');

class TemplateTest extends PHPUnit\Framework\TestCase {
  public function test_render() {
    $template = new Template();
    $this->assertEquals("invalid", $template->render("this is not url"));
    $this->assertEquals("<a href=\"https://example.com/\">https://example.com/</a>", $template->render("https://example.com/"));
    $this->assertEquals("invalid", $template->render("javascript:alert(1)"));
  }
}

?>
