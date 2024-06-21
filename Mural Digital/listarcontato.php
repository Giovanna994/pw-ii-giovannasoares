<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Listar mensagens</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <section>

        <?php
            include('conexao.php'); // Arquivo de conexão com o banco de dados   

            include('header.php');

        ?>

        <br>

        <a class="btn btn-lg btn-primary" href="painel.php"> Voltar </a>

        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Rotinas</th>
                </tr>
            </thead>

            <tbody>

                <?php

                $stmt = $mysqli->prepare("SELECT * FROM contatos ORDER BY id DESC"); // Preparar a instrução SQL para selecionar todas as mensagens
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
                                echo "<td>" . $row["nome"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["assunto"] . "</td>";
                                echo "<td>" . $row["mensagem"] . "</td>";
                                    echo "<td>";
                                        echo "<a href='excluircontato.php?id=" . $row["id"] . "'>Excluir</a>";
                                    echo "</td>";
                                echo "</tr>";
                        }
                            echo "</table>";
                        }else{
                            // Nenhum contato encontrado
                            echo "<tr><td>Nenhum contato encontrado</td></tr>";
                        }
                
                $stmt->close(); // Fechar a instrução
                ?>

            </tbody>

            <?php

            $stmt = $mysqli->prepare("select * from contatos");
            $stmt->execute(); 

            $data = array();
            
            while($row = $stmt->fetch()) {
                $data[] = $row;        
            }
            
            echo json_encode($data);

            ?>

    </section>

    <footer>
        <?php
            include("footer.php");
        ?>
    </footer>
    
</body>

</html>