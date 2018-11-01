<?php
  class Carro{
    private $modelo; // private para proteger seus atributos.
    private $motor;
    private $ano;
    // getters e setters - pegar e definir o recurso
    public function getModelo(){
      return $this->modelo;
    }
    public function setModelo($modelo){
      $this->modelo=$modelo; // $this->modelo é uma variavel e $modelo é um valor a ser atribuido.
    }
    public function getMotor():float{
      return $this->motor;
    }
    public function setMotor($motor){
      $this->motor=$motor;
    }
    public function getAno():int{ // define o tipo como integer, através do :int após o nome da função.
      return $this->ano;
    }
    public function setAno($ano){
      $this->ano=$ano;
    }
    public function exibir(){
      return array(
        "modelo"=>$this->getModelo(),
        "motor"=>$this->getMotor(),
        "ano"=>$this->getAno()
      );
    }
  }
  // criar uma instancia.
  $gol = new Carro();
  $gol->setModelo("Gol GT");
  $gol->setAno("2015");
  $gol->setMotor("2.0");
  //print_r($gol->exibir());
  var_dump($gol->exibir());
?>
