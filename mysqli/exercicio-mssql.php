<?php
    //echo "testando conexão";
    
    $conn=new mysqli("localhost", "altair", "matrix", "dbphp7");
    if ($conn->connect_error){
        echo "Erro : ".$conn->connect_error;
    }

    //echo "<br>conexão executada com sucesso!";
    
    // consulta ao banco de dados
    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $data=array(); // para criar um json
   //while ($row=$result->fetch_array()){ // Pode ser usadoo fetch_assoc() ou fetch_objetc()
    while ($row=$result->fetch_array(MYSQLI_ASSOC)){
       array_push($data, $row);
   }
   echo json_encode($data); 
   
   // com json, em javascript, ou aplicativos front-end vc poderá usar
   // para deixar estes dados apresentados na tela da melhor maneira possível.
?>