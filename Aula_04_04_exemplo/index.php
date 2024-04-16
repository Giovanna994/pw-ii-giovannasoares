<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        <form method="post">
            <div>
                <label>Nome </label>
                <input type="text" name="txNome">
            </div>

            <div>
                <label>Idade </label>
                <input type="text" name="txIdade">
            </div>

            <div>
                <input type="submit" value="Enviar" />
            </div>
        </form>    
    </section>
    
    <section>
        <?php
            if(isset($_POST['txNome'])&& isset($_POST['txIdade'])){
                echo $_POST['txNome'] ." <br />" ;
                echo $_POST['txIdade'];          
            }            
        ?>
    </section>   
    
</body>
</html>