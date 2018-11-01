<?php
// exemplo de uma classe (primeira letra maiuscula)
// atributos = variaveis
// metodos = funções
class Pessoa{
  public $nome; // atributo.
  public function falar(){ // metodo.
    return "O meu nome é ".$this->nome;
    // $this representa a classe já instanciada.
  }
}
/*
$nome é uma variavel - atributo chamada diretamente dentro da classe.  porem no método para chamar este atributo
dentro do método da classe instanciada, é necessário o $this com o ponto e o atributo local.

*/
$glaucio = new Pessoa();
$glaucio->nome= "Glaucio Daniel";
echo $glaucio->falar();
?>
