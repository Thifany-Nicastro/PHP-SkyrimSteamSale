<?php
    
    /* 
    ------------------
    STEAM API
    ------------------
    */
    
    $appid = "489830";
    $api_url = "https://store.steampowered.com/api/appdetails?appids=$appid&cc=br&l=pt";
    $json = json_decode(file_get_contents($api_url), true);


    /* 
    ------------------
    LANGUAGE
    ------------------
    */
    
    if(isset($_GET['lang']))
    {
        $lang = $_GET['lang'];
    }
    else
    {
        $lang = 'en';
    }
    
    switch ($lang) 
    {
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
