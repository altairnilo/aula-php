<?php

interface Veiculo { // interface ajuda a implementar várias classes com atributos já predefinidos e obrigatórios
  public function acelerar($velocidade);
  public function freiar($velocidade);
  public function trocarMarcha($marcha);
}
class Civic implements Veiculo{
  public function acelerar($velocidade)
  {
    echo "o veículo acelerou até ".$velocidade." km/h";
  }
  public function freiar($velocidade){
    echo "o veículo frenou até ".$velocidade." km/h";
  }
  public function trocarMarcha($marcha){
    echo " o veículo engatou a marcha ".$marcha;
  }
}
$carro = new Civic;
$carro->trocarMarcha(1);
echo "<br>";
$carro->acelerar(30);
?>
