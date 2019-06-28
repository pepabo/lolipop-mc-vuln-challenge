<?php

class Image
{
  public function getImageSize($url)
  {
    return getimagesize($url);
  }

  public function validateImage($mime)
  {
    if (preg_match('/image\/(.+)/', $mime) === 1) {
      return true;
    } else {
      return false;
    }
  }

  public function upload($url)
  {
    // 画像ファイルを取得しアップロードするものと仮定
    // ここは変更しない
    echo "upload successful";
  }
}
