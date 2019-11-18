<?php

if(isSet($_GET['lang']))
{
  $lang = $_GET['lang'];
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'pt':
  $lang_file = 'lang.pt.php';
  break;

  default:
  $lang_file = 'lang.en.php';

}

include_once 'languages/'.$lang_file;
?>
