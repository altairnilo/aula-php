<?php
// escopo de variáveis
// a variável criada fora de uma função pode ser invocada dentro dela por global
// exemplo:
$nome = "Altair";

function teste($este) {

// se não colocar a palavra global antes, ela irá dar um erro pois a variável está em outro escopo
//global $nome;

echo $este;
}

teste($nome); // invocando a função
// operadores

/*
operadores, com sinais =, >, <, !
= atribuição
== compara valores
=== compara tipos de dado
!= diferente (valor)
!== diferente (tipo de dado)
>=, <= (maior igual e menor igual)

*/
echo "<br>";
$a = 55;
$b = 30;
// abritui valores pelo sinal de igual
var_dump($a > $b); // vai mostrar booleano da comparação - false ou true.
echo ("<br>");
var_dump($a < $b);
echo ("<br>");
var_dump($a==$b); // aqui a será comparado a b pelo valor dos dados.
echo ("<br>");
var_dump($a===$b); // aqui a sera comparado a b pelo tipo de dado.
echo ("<br>");
var_dump($a>=$b);
echo ("<br>");
var_dump($a<=$b);
echo ("<br>");
// spaceship, uma forma de comparar com tres resultados
// se o primeiro sinal for o correto, o valor será 1
// se o segundo sinal for o correto, será o zero
// se o terceiro sinal for o correto, será -1.
// <=> - spaceship (parece uma nave)
var_dump($a<=>$b);
echo "<br>";
var_dump($b<=>$a);
echo "<br>";
var_dump($a = $b); // aqui a pegara o valor de b
echo "<br>";
var_dump($a<=>$b);
echo "<br>";
// operador de comparação nullcollecing
// vc pode comparar com vários itens que forem ou não nulos sem necessidade de um código maior
$a=NULL;
$b=NULL;
$c=10;
// se a tiver valor mostra, caso contrario b, caso não tiver valor mostra c... e por aí vai.
echo $a ?? $b ?? $c; // moastra a, se não existir, mostra b, se não existir mostra c......
/// operadores incrementais ++ e decrementais --
// o valor sera mostrado e depois incrementado.
$a=10;
echo "<br>".$a++;
echo "<br>";
echo $a;
?>
