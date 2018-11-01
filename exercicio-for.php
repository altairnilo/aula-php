<?PHP
for ($i=0;$i<10;$i++){
  echo "<br> Lendo $i";
}
echo "<br>Um for com espaço na contagem";
for ($i=0;$i<1000;$i+=5){
  if ($i>200 && $i<800) continue; // não há necessdiade de chaves quando somente um comando vem depois do if;
  // o comando continue faz com que a condição do for seja "pulada" para não execução da linha abaixo.
  echo "<br>i=$i";
}
?>
