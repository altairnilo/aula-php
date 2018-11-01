<?php
// spl = Standard PHP Library - nativas do php
// usadas para facilitar lacunas, procurar nos docs do php
function incluirClasses($nomeClasse){
  if (file_exists($nomeClasse.".php")===true){
    require_once($nomeClasse.".php");
  }
}
spl_autoload_register("incluirClasses");
spl_autoload_register(function ($nomeClasse){
  if (file_exists("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php")===true){
    require_once("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php");
    //DIRECTORY_SEPARATOR - busca o separador de diretório do sistema operacional utilizado no servidor.
  }
});

$carro = new DelRey();
$carro->acelerar(200);
?>
