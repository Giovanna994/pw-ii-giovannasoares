<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulário</title>

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

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

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
        $nome = ($_POST['txNome']);
        $email = ($_POST['txEmail']);
        $assunto = ($_POST['txAssunto']);
        $mensagem = ($_POST['txMensagem']);

        $stmt = $mysqli->prepare("INSERT INTO contatos values('default','$nome', '$email', '$assunto','$mensagem')");

        $stmt->execute(); 

        header('location:index.php');
        }

        include('header.php');
    ?>

    <section>

        <div class="page">

            <form action="" method="POST" class="formLogin">

                <br> <br>

                <h1 class="h3 mb-3 fw-normal">Mande uma mensagem para a nossa equipe!</h1>

                <br> <br>    

                <div class="form-floating">
                    <label for="floatingInput">Nome</label>
                    <input type="text" placeholder="Digite seu nome" class="form-control" id="floatingInput" name="txNome">
                </div>

                <br> <br>

                <div class="form-floating">
                    <label for="floatingInput">E-mail</label>
                    <input type="email" placeholder="Digite seu E-mail" class="form-control" id="floatingInput" name="txEmail">
                </div>

                <br> <br>

                <div class="form-floating">
                    <label for="floatingInput">Assunto</label>
                    <input type="text" placeholder="Assunto da mensagem" class="form-control" id="floatingInput" name="txAssunto">
                </div>

                <br> <br>

                <div class="form-floating">
                    <label for="floatingInput">Mensagem</label>
                    <textarea name="txMensagem" id="" placeholder="Digite aqui sua mensagem!" class="form-control"></textarea>
                </div>

                <br> <br>

                <div class="form-floating">
                    <button class="btn btn-primary w-100 py-2" type="submit">Enviar</button>
                </div>

            </form>

        </div>

    </section>

    <?php
       include('footer.php') 
    ?>
    
</body>

</html>