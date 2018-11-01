<?php
   $nome="Altair";
   echo "Nome=".$nome;
   unset($nome);
   // unset apaga a variável.
   $ip = $_SERVER["REMOTE_ADDR"];
   echo "<br>".$ip;
   $ip=$_SERVER["SCRIPT_NAME"];
   echo "<br>".$ip;
?>
