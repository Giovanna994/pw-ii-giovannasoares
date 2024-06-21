<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar anuncios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

</head>

<body>

    <head>
        <?php
            include("header.php");

            include("conexao.php");
        ?>
    </head>

    <section>

    <div>

        <a class="btn btn-lg btn-primary" href="novoanuncio.php">Novo Anúncio</a>

        <a class="btn btn-lg btn-primary" href="painel.php"> Voltar </a>

    </div>

    <table class="table table-striped">
    
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Periodo</th>
                    <th scope="col">Rotinas</th>
                </tr>
            </thead>

            <tbody>

              <?php

              $stmt = $mysqli->prepare("SELECT * FROM anuncios ORDER BY id DESC"); // Preparar a instrução SQL para selecionar todas as mensagens
              $stmt->execute(); // Executar a instrução SQL

              // Verificando se houve erro na execução
              if (!$stmt->execute()) {
                      echo "Erro: Falha ao executar a consulta - " . $stmt->error;
                      exit();
              }  
                  // Obtendo os resultados da consulta
                  $resultado = $stmt->get_result();

                      // Verificando se há linhas no resultado
                      if ($resultado->num_rows > 0) {
                              
                          while ($row = $resultado->fetch_assoc()) {
                              // Dados de cada contato
                              echo "<tr>";
                              echo "<td>" . $row["id"] . "</td>";
                              echo "<td>" . $row["titulo"] . "</td>";
                              echo "<td>" . $row["descricao"] . "</td>";
                              echo "<td>" . $row["imagem"] . "</td>";
                              echo "<td>" . $row["periodo_duracao_anuncio"] . "</td>";
                                  echo "<td>";
                                    echo "<a href='editanuncio.php?id=" . $row["id"] . "'>Editar</a> </ br>"; 
                                    echo "<a href='excluiranuncio.php?id=" . $row["id"] . "'>Excluir</a>";
                                  echo "</td>";
                              echo "</tr>";
                      }
                          echo "</table>";
                      }else{
                          // Nenhum contato encontrado
                          echo "<tr><td>Nenhum anúncio encontrado</td></tr>";
                      }

              $stmt->close(); // Fechar a instrução
              ?>

            </tbody>

    </section>

    <footer>
        <?php
            include('footer.php')
        ?>
    </footer>
    
</body>

</html>