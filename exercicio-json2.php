<?PHP
$json='[{"nome":"Jo\u00e3o","idade":20},{"nome":"Altair","idade":48}]';
$dados=json_decode($json,true);
var_dump($dados);
?>
