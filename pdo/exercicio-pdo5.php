<?php
    // commit e rollback - confirmar e retornar efeito
    $conn=new PDO("mysql:host=localhost;dbname=dbphp7","altair","matrix");
    //deve ser criada uma transação, amarrada a conexão e não ao statement
    $conn->beginTransaction();
    $stmt = $conn->prepare("delete from tb_usuarios where idusuario= ?");
    //outra forma de passar informação, através de um array com os indices que serão usados
    // caso sejam mais de um, outro ponto de interrogação será colocado na sentença
    
    $id=2;
    
    // $stmt->bindParam(":ID",$id); o bind não é necessário para este 
    // tipo de passagem de parametros
    
    $stmt->execute(array($id)); // como só há um parametro, então só uma variável.
    
    //$conn->rollback();
    $conn->commit();

    echo "Dados excluidos com suscesso";
    

?>