<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red
        }
    </style>
</head>
<body>
    <form method="POST" action= "">
        <h1> Formulario com PHP</h1>
        Nome: <input required name = "nome" type = "text">
        <span class = "error"> *<span><br><br>
        Email : <input required name = "email" type="email">
        <span class = "error"> *<span><br><br>
        Site: <input name = "site" type = "url"><br><br>
        Comentario: <textarea name = "comentario" cols="30" rows = "3"></textarea><br><br>
        Gênero: <input name = "genero" value= "masculino" type = "radio">Masculino
        <input name = "genero" value = "feminino" type = "radio"> Feminino
        <input name = "genero" value = "outro" type = "radio"> Outro <br><br>
        <button name = "enviado" type = "submit">Enviar</button>
        <h1> Dados enviados: </h1>
        
        <p class="error"> *Obrigatório</p>
        <?php

        include("conexao.php");
        if(isset($_POST['enviado'])){
            
            if(empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) >100){
                echo '<p class = "error">Preencha o campo nome</p>';
                die();
            }

            if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                echo '<p class = "error">Preencha o campo email</p>';
                die();
            }

            if(!empty($_POST['site']) || !filter_var($_POST['site'],FILTER_VALIDATE_URL)){
                echo '<p class = "error">Preencha corretamente o campo site</p>';
                die();
            }


            $genero = "Não selecioado";

            if(isset($_POST['genero'])){
                $genero = $_POST['genero'];
            }

            echo "<p>Nome: " . $_POST['nome']."</p>";
            echo "<p>Email: " . $_POST['email']."</p>";
            echo "<p>Site: " . $_POST['site']."</p>";
            echo "<p>Comentario: " . $_POST['comentario']."</p>";
            echo "<p>Gênero: " . $genero."</p>";

        }
        ?>
    </form>

</body>
</html>