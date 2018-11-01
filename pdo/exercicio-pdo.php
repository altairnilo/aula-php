<?php
    // PDO - PHP Data Object, forma padronizada para conversação com o banco de dados.
    // sempre utilizando através de classes , ou seja POO.
    //echo "usando PDO<br>";
    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","altair","matrix");
    // DSN = Data Search Name
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $stmt->execute();

    $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
    // para melhorar o codigo
    foreach ($results as $row){
        foreach ($row as $key => $value){
            echo "<br><strong>".$key."</strong> =".$value;
        }
        echo "<br>";
    }
    //var_dump($results);
?>