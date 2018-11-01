<?php
require_once("config.php");
session_regenerate_id(); // para atualizar o ID de sessão
echo "ID de sessao = ".session_id();
echo "<br>";
var_dump($_SESSION);
// session ID pode ser colocada estaticamente,
echo "<br>";
echo session_save_path();
echo "<br>";
echo session_status();
?>
