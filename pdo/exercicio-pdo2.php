<?php
    $conn=new PDO("mysql:host=localhost;dbname=dbphp7","altair","matrix");

    $stmt = $conn->prepare("insert into tb_usuarios (deslogin,dessenha) values (:LOGIN,:PASSWORD)");
    $login="jose";
    $password="1234567890";

    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->execute();
    echo "Dados cadastrados com suscesso";
    

?>