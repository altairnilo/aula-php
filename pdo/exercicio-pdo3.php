<?php
    $conn=new PDO("mysql:host=localhost;dbname=dbphp7","altair","matrix");

    $stmt = $conn->prepare("update tb_usuarios set deslogin=:LOGIN, dessenha=:PASSWORD where idusuario=:ID");
    $login="jack";
    $password="matrix2011abcdefg";
    $id=3;
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->bindParam(":ID",$id);
    $stmt->execute();
    echo "Dados alterados com suscesso";
    

?>