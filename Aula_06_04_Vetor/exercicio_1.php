<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //declaração do vetor
    $numero = array();

    //atribuição de valores a um vetor
    $numero[0] = 2;
    $numero[1] = 5;
    $numero[2] = 1;
    $numero[3] = 3;
    $numero[4] = 4;

    //exibição do vetor
    for($i=0;$i<count($numero);$i++){
        echo "<p> $numero[$i] </p>";
    }
    ?>

</body>
</html>