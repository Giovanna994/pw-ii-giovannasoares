<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        <form method="post" action="visualizarcontato.php">

        <div>
            <label>Nome </label>
            <input type="text" name="txNome">
        </div>

        <div>
            <label>E-mail </label>
            <input type="text" name="txemail">
        </div>

        <div>
            <label>Mensagem </label>
            <input type="text" name="txmen">
        </div>

        <div>
            <label>Assunto </label>
            <input type="text" name="txass">
        </div>

        <div>
            <button> <a href="visualizarcontato.php"> </a> Enviar </button>            
        </div>

        </form>   
    </section>

    <section>
        <?php
        include("visualizarcontato.php");
        ?>
    </section>
    
</body>
</html>