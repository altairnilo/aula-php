<?php
require_once "funcoes.php";
//include "funcoes.php";
/*
o comando include busca o arquivo e inclui no codigo da pagina executada, assim como o require.

porem o require exige (força) a existencia do arquivo.
include_once e require_once são para buscar o conteúdo dos arquivos solicitados somente uma vez caso haja
um laço buscando o conteúdo dos arquivos mais de uma vez.

*/
$resultado = soma(10,32);
echo $resultado;
?>
