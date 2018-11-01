<?php
spl_autoload_register(function($nameClass){
  //var_dump($nameClass);
  $dirClass="classes";
  $filename=$dirClass.DIRECTORY_SEPARATOR.(str_replace('\\','/',$nameClass)).".php";
  //var_dump($filename);
  if (file_exists($filename)){
    require_once($filename);
  }
});
?>
