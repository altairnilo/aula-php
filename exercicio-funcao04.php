<?PHP
/* passagem de parametros por valor e por referencia
passando por valor function ($a), o retorno fará execuções e a variável original não será alterada.
passando por referencia function(&$a), executará função substituindo o valor na variável, usando o &
*/
$a=10;
function trocaValor($a){
  $a=50;
  return ($a);
}
function trocaValorRef(&$a){
  $a+=50;
  return ($a);

}
echo 'variável $a='.$a."<br>";
echo trocaValor($a)."<br>";
echo 'variável $a='.$a."<br>";
echo trocaValorRef($a)."<br>";
echo 'variável $a='.$a;
echo "<br>outro exemplo<br>";

$pessoa=array(
  'nome'=>'João',
  'idade'=>20
);
print_r($pessoa);
echo "<br>";
foreach ($pessoa as &$value){
  if (gettype($value)==='integer') $value+=10;
  echo $value.'<br>';
}
print_r($pessoa);
?>
