<?php
// Para o login funcionar é necessario ter o banco de dados no phpmyadmin ou no sql, senão tiver vai dar erro!

include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])) {

        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {
            
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                    header("Location: painel.php");

                } else {
                    echo "Falha ao logar! E-mail ou senha incorretos";
                }

        }   

    }
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Login</title>

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>

        .formLogin{
            text-align: -webkit-center;
            padding: 10px;
        }

        .form-floating{
            width: 70%;
        }

    </style>

</head>

<body>

    <?php 
        include('header.php')
    ?>

    <br> <br>

    <div class="page">

        <form action="" method="POST" class="formLogin">

        <h1 class="h3 mb-3 fw-normal">Acesse sua conta</h1>

        <br> <br>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com" name='email'>
                <label for="floatingInput">Email</label>
            </div>

        <br> <br>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='senha'>
                <label for="floatingPassword">Senha</label>
            </div>

        <br> <br>

        <div class="form-floating">
            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
        </div>     
        
        </form>
    </div>

    <?php
        include('footer.php')
    ?>

</body>

</html>