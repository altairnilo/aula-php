<form>
  Nome:<input type="text" name="nome">
  <br>
  Nascimento:<input type="date" name="nascimento">
  <br>
  <input type="submit" value="OK">
</form>
<?PHP
if (isset($_GET)){
  foreach ($_GET as $key => $value){
    echo "Nome do Cammpo: ".$key;
    echo "<br>Valor do Campo: ".$value;
    echo "<hr>";
  }
}
?>
