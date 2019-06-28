<?php
class Template {
  public function validUrl($url) {
    return filter_var($url, FILTER_VALIDATE_URL);
  }
  public function render($url) {
    if ($this->validUrl($url, FILTER_VALIDATE_URL) === false) {
      return "invalid";
    }

    return "<a href=\"" . htmlspecialchars($url, ENT_QUOTES, "utf-8") ."\">" . htmlspecialchars($url, ENT_QUOTES, "utf-8") . "</a>";
  }
}
?>
