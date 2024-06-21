<?php
    include('protect.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel</title>

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

</head>

<body>

    <?php
        include('header.php');
    ?>

    <section>

        <main class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-5">Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>. </h1>

                <a class="btn btn-lg btn-primary" href="listarcontato.php">Mensagens recebidas</a>

                <a class="btn btn-lg btn-primary" href="novoanuncio.php">Crie novos anúncios</a>

                <a class="btn btn-lg btn-primary" href="anunciosedit.php">Modifique anúncios</a>

                <a class="btn btn-lg btn-primary" href="logout.php">Sair</a>

            </div>

            <br>

    </main>

    </section>
    
    <?php
        include('footer.php');
    ?>

</body>
</html>