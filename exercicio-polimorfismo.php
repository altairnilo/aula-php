<?php
abstract class Animal{
  public function falar(){
    return "Som";
  }
  public function mover(){
    return "Anda";
  }
}
class Cachorro extends Animal{
  public function falar(){
    return "late"; // método com o mesmo nome porém com saída/comportamento diferente.
  }
}
class Gato extends Animal{
  public function falar(){
    return "Mia";
  }
}
class Passaro extends Animal{
  public function falar(){
    return "Canta";
  }
  public function mover(){
    return "Voa e ".parent::mover();// palavra reservada parent que se refere a "classse Pai", como o this.
    // no caso trará valor da classe pai e agregará a modificação comportamental do método na classe atual.
  }
}
$pluto = new Cachorro();
echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";
echo "---------------------------------------------<br>";
$tom = new Gato();
echo $tom->falar()."<br>";
echo $tom->mover()."<br>";
echo "---------------------------------------------<br>";
$periquito = new Passaro();
echo $periquito->falar()."<br>";
echo $periquito->mover()."<br>";
?>
