<?PHP
function ola(){
$argumentos=func_get_args(); // ela irá recuperar como um array, todos os argumentos passados para a função
return $argumentos;
}
var_dump(ola("bom dia",10));
?>
