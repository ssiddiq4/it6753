<?php

function textCleaner($text) {
  $text = trim($text);
  $text = stripslashes($text);
  $text = htmlspecialchars($text);
  return $text;
}


?>