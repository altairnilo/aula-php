<?PHP
function test($callback){
  // processo lento
  $callback();
}

test(function(){ // função anonima
  echo "terminou";
});
?>
