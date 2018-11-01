<?php
$nome ="Altair";
$nome2='Barros';

// com aspas duplas, o valor da variavel pode ser colocada com o nome da variavel na sentença.
var_dump($nome,$nome2);
echo "<br>";
echo "Meu nome é: $nome $nome2"; // recurso interpolação de variáveis - recurso do PHP.
echo "<br> Agora utilizando aspas simples<br>";
echo 'Será que mostrará $nome<br>';// neste caso mostra a string sem converter o valor da variavel.
echo 'concatenado $nome= '.$nome.'<br>';
// colocar em maiusculas e minusculas, observando que letras acentuadas não poderão ser convertidas.
$teste="João Rangel";
echo "<br>converter para maiusculas ".strtoupper($teste);
$teste="JOÃO RANGEL";
echo "<br>converter para minusculas ".strtolower($teste);
$teste="altair nilo barros da silva"; // conveter somente as primeiras letras em maiusculas.
echo "<br>".ucwords($teste);
// só a primeira letra
echo "<br>".ucfirst($teste);

// usando replace, trocando um caracter por outro dentro da string;
$teste2=str_replace("o","0",$teste);
echo "<br>$teste2";
$teste2=str_replace("a","4",$teste2);
echo "<br>$teste2";
// retornar posição dentro da string.
$frase="A repetição é mãe da retenção";
$palavra="mãe";
$q=strpos($frase, $palavra);
echo "<br>";
var_dump($q);
echo "<br>";
$texto=substr($frase,0,$q);
echo $texto;
$texto2=substr($frase,$q+strlen($palavra),strlen($frase));
echo "<br>$texto2";
?>
