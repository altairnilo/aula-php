<?PHP
function ola($texto="mundo"){
  return "Olá $texto!<br>";
// valores definidos como obrigatórios na função, deverão estar a esquerda. caso contrário irá dar um erro no código.
}
echo ola();
echo ola("Altair");
?>
