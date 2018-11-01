<?php
// encapsulamento
class Pessoa {
  public $nome = "Rasmus Lerdorf"; // atributo publico
  protected $idade =48; // protegido
  private $senha = "123456"; // privado

  public function verDados(){
    echo $this->nome."<br>";
    echo $this->idade."<br>";
    echo $this->senha."<br>";
  }
}

class Programador extends Pessoa{
   // extende tudo que é da classe Pessoal, menos que é privado.
   public function verDados(){
     echo get_class($this)."<br>"; // para saber de qual classe ele está pegando os dados.
     echo $this->nome."<br>";
     echo $this->idade."<br>";
     echo $this->senha."<br>"; // aqui haverá um erro pois não há como herdar um atributo privado
   }
}
$objeto = new Programador();
//echo $objeto->nome."<br>"; // o nome é publico, pode ser acessado de "fora".
//echo $objeto->idade."<br>"; // só poderão acessar atributos protegidos quem estão dentro da própria classe ou herdam dela.
//echo $objeto->senha."<br>"; // igualmente como o protected, porém no grau privado, somente da propria classe tem acesso.
// os herdeiros não podem acessar.
$objeto->verDados();
?>
