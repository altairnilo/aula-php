<?PHP
//sessions - trabalhar com elas, que ficam no ar por até 20minutos em ociosidade
// elas devem ser iniciadas para trabalhar, pois não são feitas automaticamente pelo PHP
// é como um array superglobal
session_start(); // inicia a session
$_SESSION["nome"]="Altair";
// um arquivo .php (configuration, a exemplo) pode ser colocado para recarregar o session_start() e outras
// configurações ao carregar as paginas PHP.

// para apagar a session, seria usado session_destroy() ou session_unset();
// ex.: session_unset($_SESSION['nome']);
// session_destroy($_SESSION);, se não definida a variável, session_unset irá apgar todas as variáveis de sessão.
?>
<input type="button" value="OUTRO" onClick="window.open('teste-session.php','_self');">
