<?php

require('./image.php');
require_once('vendor/autoload.php');

class ImageTest extends PHPUnit\Framework\TestCase {
  public function test_getImageSize()
  {
    $image = new Image();
    $this->assertEquals(false, $image->getImageSize("https://example.com/"));

    $expect = Array(0=>64, 1=>64, 2=>3, 3=>'width="64" height="64"', 'bits'=>8, 'mime'=> 'image/png');
    $this->assertEquals($expect, $image->getImageSize("https://mc.lolipop.jp/_nuxt/icons/icon_64.817eaa.png"));
  }

  public function test_validateImage()
  {
    $image = new Image();
    $this->assertEquals(true, $image->validateImage("image/jpeg"));
    $this->assertEquals(false, $image->validateImage("text/html"));
  }

  public function test_upload()
  {
    $image = new Image();
    ob_start();
    $image->upload("https://example.com");
    $actual = ob_get_clean();
    $this->assertEquals("upload successful", $actual);
  }
}
