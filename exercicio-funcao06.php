<?PHP
function soma(int ...$valores):string{ // o retorno será string
// já será passado somente valores inteiros para esta função, que trabalhará com array (declaração de tipos escalares)
  return array_sum($valores); // caso seja passado mais de um valor, sem precisar usar um código de recursividade

}
echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(1.5, 3.2);// neste caso será convertido em inteiros, retirando o valor flutuante da parte inteira.
echo "<br>";
?>
