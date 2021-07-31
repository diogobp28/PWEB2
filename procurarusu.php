<?php
    include('conexaobancopdo.php');

    $proc = $_POST['proc'];
    $stmt = $conn->prepare("SELECT `username` FROM `user` WHERE `username` = :look");
    $stmt->bindparam(":look", $proc);
    $stmt->execute();

    if($stmt->rowCount() != 0){
    
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "User Encontrado:";
        foreach ($resultado as $key => $v){
            echo $key."= ".$v;
         } 
    }else{
        echo "Não há usuários referentes a pesquisa";
    }

    ?>