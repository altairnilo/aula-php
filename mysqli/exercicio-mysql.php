<?php
    echo "testando conexão";
    
    $conn=new mysqli("localhost", "altair", "matrix", "dbphp7");
    if ($conn->connect_error){
        echo "Erro : ".$conn->connect_error;
    }

    echo "<br>conexão executada com sucesso!";
    $login="user";
    $pass="123455";
    // as variaveis são criadas para passagem via referencias para o comando bind
    // preparar comando para envio para o banco de dados.
    $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (?,?)");
    $stmt->bind_param("ss",$login,$pass); 
    // levará os paramateros para as interrogações, substituindo esses valores varchar.
    /* s = string, i= integer, d=double->float, b=blob (valores para o banco de dados) 
    mais seguro que passar os valores das variaveis direto pelo comando.
    as variaveis podem ser criadas depois do comando bind pois são uma preparação para a execução.
    statement prepare.
    */
    $stmt->execute();// execução da passagem do comando via referencias, etc...
    // pode ser executada varias vezes neste codigo, somente trocando os valores de login e pass, 
    // sem precisar reescrever o prepare.
    $login="altair";
    $pass="Matrix2018";
    $stmt->execute(); // insere novo valor 
?>