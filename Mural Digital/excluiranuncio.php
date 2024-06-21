<?php
    include("conexao.php");

    $id = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM anuncios WHERE id = ?");
    $stmt->bind_param('i', $id);

        if (!$stmt->execute()) {

            echo "Erro: Falha ao excluir anuncio - " . $stmt->error;

            exit();

        }else{
            echo "Anúncio excluído com sucesso!";
        }

        $stmt->close();

    header('location:anunciosedit.php');

?>