<?php
interface Veiculo { // interface ajuda a implementar várias classes com atributos já predefinidos e obrigatórios
  public function acelerar($velocidade);
  public function freiar($velocidade);
  public function trocarMarcha($marcha);
}
abstract class Automovel implements Veiculo{ // esta classe não pode ser instanciada, porém como a interface, prende a classe
  // que o extender os métodos e atributos básicos para criação de novas classes que serão especializadas dependendo
  // do tipo de atributos e métodos utilizados posteriormente.
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
?>
