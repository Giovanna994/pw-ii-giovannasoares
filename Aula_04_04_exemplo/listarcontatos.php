<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    include("conexao.php");

    $stmt = $conn->prepare("select * from tbContato");
    $stmt->execute(); 

    while($row = $stmt->fetch()) {
        echo($row['idContato']);
        echo($row['nome']);
        echo($row['email']);
        echo($row['assunto']);
        echo($row['mensagem']);
        echo "<br />";
    }
    ?>
    
</body>
</html>