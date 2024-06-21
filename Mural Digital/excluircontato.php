<?php
    include("conexao.php");

    $id = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM contatos WHERE id = ?");
    $stmt->bind_param('i', $id);

        if (!$stmt->execute()) {

            echo "Erro: Falha ao excluir contato - " . $stmt->error;

            exit();

        }else{
            echo "Contato excluído com sucesso!";
        }

        $stmt->close();

    header('location:listarcontato.php');

?>