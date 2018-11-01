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
$objeto = new Pessoa();
echo $objeto->nome."<br>"; // o nome é publico, pode ser acessado de "fora".
//echo $objeto->idade."<br>"; // só poderão acessar atributos protegidos quem estão dentro da própria classe ou herdam dela.
//echo $objeto->senha."<br>"; // igualmente como o protected, porém no grau privado, somente da propria classe tem acesso.
// os herdeiros não podem acessar.
echo "como os dados são privados e protegidos, vamos buscar por um método publico o acesso aos mesmos<br>";
$objeto->verDados();
?>
