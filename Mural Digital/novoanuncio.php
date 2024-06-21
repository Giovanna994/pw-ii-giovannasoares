<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Novo anúncio</title>

  <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .formLogin {
        text-align:-webkit-center;
        padding: 10px;
    }

    .form-floating {
      width: 70%;
    }
  </style>

</head>

<body>

  <?php
    include('conexao.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $titulo = $_POST['txTitulo'];
            $descricao = $_POST['txDescricao'];
            $periodo = $_POST['numData'];
            $imagem = $_POST['arqimage'];

            $stmt = $mysqli->prepare("INSERT INTO anuncios values('default','$titulo', '$descricao', '$imagem', '$periodo')");
            $stmt->execute();
        }   

    include('header.php');
  ?>

  <div class="page">

    <form action="" method="POST" class="formLogin">

        <br><br>

        <h1 class="h3 mb-3 fw-normal">Crie um novo anúncio ou <a href="painel.php">Volte</a> para a página anterior!</h1>

        <br><br>

        <div class="form-floating">
            <label for="floatingInput">Titulo</label>
            <br>
            <input type="text" placeholder="Titulo" class="form-control" id="floatingInput" name="txTitulo">
        </div>

        <br><br>

        <div class="form-floating">
            <label for="floatingInput">Descrição</label>
            <br>
            <input type="text" placeholder="Descrição" class="form-control" id="floatingInput" name="txDescricao">
        </div>

        <br><br>

        <div class="form-floating">
            <label for="floatingInput">Vai até:</label>
            <br>
            <input type="date" placeholder="Data" class="form-control" id="floatingInput" name="numData">
        </div>

        <br><br>

        <div class="form-floating">
            <label for="floatingInput">Imagem</label>
            <br>
            <input type="file" name="arqimage" />
        </div>

        <br><br>

        <div class="form-floating">
            <button class="btn btn-primary w-100 py-2" type="submit">Enviar</button>
        </div>

        <br>

    </form>

  </div>

  <?php
    include("footer.php")
  ?>

</body>

</html>