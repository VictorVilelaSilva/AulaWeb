<?php

include('conexao.php');
$id = intval($_GET['id']);

$erro - false;

if(count($_POST) > 0){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];

    if(empty($nome)){
        $erro = "Preencha o nome";
    }
    if(empty($email)){
        $erro = "Preencha o email";
    }
    if($erro){
        echo "<p>$erro</p>";
    }
if(!empty($nascimento)){
    $pedacos = explode('/',$nascimento);
}
}
?>