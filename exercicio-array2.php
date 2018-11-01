<?PHP
  // trabalhando arrays multidimensionais

  $pessoas=array();

  array_push($pessoas,
    array('nome'=>'João','idade'=>20));
  array_push($pessoas,
      array('nome'=>'Altair','idade'=>48));


  print_r($pessoas);
  echo "<br>";
  print_r($pessoas[0]['nome']);// só trará o valor do nome do indice zero.
?>
