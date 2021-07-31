<?php
    include('connection.php');

    ?>
        <form name="form" action="procurarusu.php" method="POST">
            
            <label for="search">Buscar usuário</label>
            <input type="text" name="search"> 
            <br> <br> 

            <button type="submit" value="ir">GO</button>
        </form>
    <?php

    echo 'Usuários localizados:';

    $sql = $conn->prepare("SELECT `name` FROM `users`");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    for ($value=0; $value < count($result); $value++) { 
        echo "Usuário: ".($value++);
        foreach ($result[$i] as $key => $value) {
            echo $key."=".$value;
        }
    }
?>