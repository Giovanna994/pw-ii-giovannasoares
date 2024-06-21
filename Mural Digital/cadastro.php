<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .formLogin{
            text-align:-webkit-center;
            padding: 10px;
        }

        .form-floating{
            width: 70%;
        }
    </style>
    
</head>

<body>

    <?php
        include('conexao.php');

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Validar e sanear entrada do usuário
                $usuario = ($_POST["nome"]);
                $email = ($_POST["email"]);
                $senha = ($_POST["senha"]);
            
                // Verificar se o email já existe no banco de dados (preparando consulta SQL)
                $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
            
                // Verificar se há linhas no resultado da consulta (email já existe)
                $stmt->next_result();

                if ($stmt->store_result()) {
                    $numRows = $stmt->num_rows();

                        if ($numRows > 0) {

                        echo "Esse email já está registrado em nosso site. Por favor, escolha outro.";
                        }

                        $stmt->free_result();

                }

            // Novo usuário: preparar consulta para inserção e criptografar senha
            $stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $usuario, $email, $senha);
            
            // Executar consulta e verificar se a inserção foi bem-sucedida
                if ($stmt->execute()) {
                    echo "Registro bem-sucedido!";
                } else {
                // Erro na inserção: registrar e mostrar mensagem de erro
                    echo "Erro ao registrar usuário: " . $mysqli->error;
                }
    
                // Fechar conexão com o banco de dados
                $mysqli->close();
            }

        include('header.php');
    ?>

    <section>

        <div class="page">

            <form action="" method="POST" class="formLogin">

                <br> <br>

                <h1 class="h3 mb-3 fw-normal">Cadastre-se</h1>

                <br> <br>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nome" name='nome'>
                    <label for="floatingInput">Usuario:</label>
                </div>

                <br> <br>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com" name='email'>
                    <label for="floatingInput">Email:</label>
                </div>

                <br> <br>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name='senha'>
                    <label for="floatingPassword">Senha:</label>
                </div>

                <br> <br>

                <div class="form-floating">
                    <button class="btn btn-primary w-100 py-2" type="submit" value="Cadastrar" name="Cadastrar" id="Cadastrar">Enviar</button>
                </div>
            
            </form>

        </div>

    </section>

    <?php
        include('footer.php');
    ?>
    
</body>

</html>