<?PHP
// para criar uma constante, usar define
//define("<nome da constante>",<valor da constante)
//define("SERVIDOR","127.0.0.1");
define("SERVIDOR",$_SERVER["REMOTE_ADDR"]);
echo "SERVIDOR=".SERVIDOR;
// por convenção procurar usar a constante sempre com letras maiusculas
?>
