<?PHP
/*
JSON = javascript object notation
ele é melhor que xml pois não precisa repetir estrutura dentro do arquivo, economizando espaço e melhorando a
transmissão através da conexão dos usuários.
é equivalente ao array bidimensional ou multidimensional.
*/
// aproveitando parte do código de outro arquivo.
$pessoas=array();

array_push($pessoas,
  array('nome'=>'João','idade'=>20));
array_push($pessoas,
    array('nome'=>'Altair','idade'=>48));
echo json_encode($pessoas);
?>
