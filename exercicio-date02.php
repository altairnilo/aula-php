<?PHP
// trabalhando com setlocale, onde há várias formas de configurar (windows, linux e utf8)

setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese"); // padrões do Linux, UTF8 e Windows respectivamente.
// LC_ALL define que deve ser trocada todas as configurações de localização para a lingua que vc quer.
echo ucwords(strftime("%A %B"));// similar ao date.
echo "<br>";
// iniciando uma classe DateTimne, com uma instancia (objeto), que diferente da função pdoerá ter mais recursos.
$dt=new DateTime();// criada a instancia de DateTime
// exemplo de adicionar 15 dias para a data criada, usando a Classe DateInterval
$periodo= new DateInterval("P15D");// periodo P de 15 dias D.
echo $dt->format("d/m/Y H:i:s");// usa-se o -> para ter acesso aos recursos do objeto. format usa similar configuração ao date
echo "<br>";
$dt->add($periodo);
echo $dt->format("d/m/Y H:i:s");
?>
