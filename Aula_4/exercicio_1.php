<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $nomeFuncionario = "Giovanna";
    $salario = 1800;
    $porcentagemAumento = 10;
    $resultado = $salario * ($porcentagemAumento / 100);
    $resultadoAumento = $salario  + $resultado;

    echo "<h1> Nome do(a) Funcionario:  $nomeFuncionario</h1>" . "<br />"; 
    echo "<h1> Salário Base:  $salario  </h1>" . "<br />" ; 
    echo "<h1> Valor final do aumento:  $resultadoAumento </h1>";
    
    ?>
    
</body>
</html>