<?php
namespace Cliente; // seguindo padrão do nome da pasta que por convenção está em primeira letra maiuscula
class Cadastro extends \Cadastro{
  public function registrarVenda(){
    echo "<br>foi registrado uma venda para o cliente ".$this->getNome();
  }
}
 ?>
