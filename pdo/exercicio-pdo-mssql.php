<?php
    // PDO - PHP Data Object, forma padronizada para conversação com o banco de dados.
    // sempre utilizando através de classes , ou seja POO.
    //echo "usando PDO<br>";
    /*
    no lugar de dbname => Database, no lugar de host -> server acrescentado de \nome da instancia
    do sql server, no lugar de root (usuairo de acesso) => sa e a senha de acesso ao mssql
    deve ser acrescentado ainda após a instância do sql o ;ConnectionPooling=0, acredito ser o pool de conexão.
    ConnectionPooling e o estado da conexão, caso 0, depois da utilização, fecha conexão,
    se for 1 mantem o estado da conexão sem fechar.
    */
    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");// pooling é necessário no mssql, sa = administrador
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