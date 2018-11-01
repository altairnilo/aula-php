<?php
// métodos mágicos - magic methods.
// exemplo disso são os métodos construtores.
class Endereco {
  private $logradouro;
  private $numero;
  private $cidade;

  public function __construct($a,$b,$c){ // dois underlines para métodos mágicos.
    $this->logradouro=$a;
    $this->numero=$b;
    $this->cidade=$c;
  }
  // assim como o construct, há também o destruct
  public function __destruct(){
    var_dump("DESTRUIR");
  }
  // outro metodo magico para conversão para string dos dados (serialização)
  public function __toString(){
    return $this->logradouro.", ".$this->numero." - ".$this->cidade;
  }
}

$meuEndereco = new Endereco("Rua Campo Belo", "4 - Casa 2", "Angra dos Reis");
echo $meuEndereco;
echo "<br>";
var_dump($meuEndereco);
unset ($meuEndereco); // liberar memória, destruindo os dados na variável/objeto.
?>
