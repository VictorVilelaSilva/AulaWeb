<?php

include('conexao.php');
$id = intval($_GET['id']);

include ('conexao.php');

$sql_clientes = "SELECT * FROM clientes WHERE id = '$id'";
$query_clientes = $mysqli->query($sql_clientes) or die ($mysqli->error);
$num_clientes = $query_clientes->num_rows;

    if($erro){
        echo "<p><b>ERRO: $erro</b></p>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>