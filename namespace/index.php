<?php
require_once("config.php");
use Cliente\Cadastro; // usar o namespace e a classe lá armazenada.
$cad = new Cadastro();
$cad->setNome("Altair Nilo");
$cad->setEmail("altairnilo@gmail.com");
$cad->setSenha("123456");
echo $cad; // toString será invocado imediatamente plo método mágico __toString;

// usar a classe do namespace
/*echo "<br>saida para uso no namespace<br>";
use Cliente\Cadastro;
$cad = new Cadastro();
$cad->setNome("Altair Nilo");
$cad->setEmail("altairnilo@gmail.com");
$cad->setSenha("123456");
*/$cad->registrarVenda();

?>
