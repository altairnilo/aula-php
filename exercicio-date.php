<?PHP
echo date("d/m/Y H:i:s");
// de acordo com a linguagem do servidor, a função date irá trazer o mês ou dia da semana na lingua do servidor.
echo "<br>";
echo time(); // segudnos de 01/01/1970

// para saber o timestamp de uma determinada data
echo "<br>";
echo strtotime("1970-08-10"); // dia do meu aniversário.
echo "<br>";
echo date("d/m/Y, l, w",19105200);
$weekDay=date("w",19105200);
switch ($weekDay){
  case 0:
    echo "Domingo";
    break;
  case 1:
    echo "Segunda-feira";
    break;
  case 2:
    echo "Terça-feira";
    break;
  case 3:
    echo "Quarta-feira";
    break;
  case 4:
    echo "Quinta-feira";
    break;
  case 5:
    echo "Sexta-feira";
    break;
  case 6:
    echo "Sábado";
    break;
  default:
    echo "Data inválida!";
    break;
}
?>
