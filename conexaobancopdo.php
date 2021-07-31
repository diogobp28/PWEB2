<?php

include("usaruio");

$username = "root";
$senha = "";
$usuario = "prova";
$database = "ava2-pweb2";

if($_REQUEST["email"] == '' or $_REQUEST["senha"] =='' or $_REQUEST["nomecomp"]=='' or $_REQUEST["username"]==''){
    echo "PREENCHA TODAS AS INFORMAÇÕES PARA PROSSEGUIR";

}else{
    $pass_crip = md5($_REQUEST["senha"]);
	$user_crip = new usaruio($_REQUEST["email"],$_REQUEST["username"], $_REQUEST["nomecomp"], $pass_crip);
}

try{
    $nomecomp = $user_crip->getNomeComp();
	$username = $user_crip->getUserName();
	$email = $user_crip->getEmail();
	$senha = $user_crip->getSenha();
    $value=0;
    
    $stmt = $conn->prepare('INSERT INTO users VALUES(x,x,x,x)');
	$stmt->bindParam(1,$nomecomp, PDO::PARAM_INT);
	$stmt->bindParam(2,$username, PDO::PARAM_INT);
	$stmt->bindParam(3,$email, PDO::PARAM_INT);
	$stmt->bindParam(4,$senha, PDO::PARAM_INT);
	$stmt->execute();

    $usuarios = $conn->prepare('SELECT nomecomp, username, email FROM users');
	$usuarios->execute();

    while($row = $usuarios->fetch(PDO::FETCH_OBJ)){
        echo'usuário '. $value;;
        echo 'nome completo: '.$row->nomecomp;
        echo 'username: '.$row->username;
        echo 'email: '.$row->email;
        $value++;
      }

} catch (PDOException $e){
    echo 'Conexão não efetuada - ERROR:' . $e->getMessage();
}


?>