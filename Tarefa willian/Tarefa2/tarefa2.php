<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <center>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <meta charset="UTF-8">
    <title>Lista 1</title>
    <meta charset="utf-8">
    <title>Somar Números</title>
    </head>
    <body>
        <header>
            <h1>Somar Números</h1>
            <hr/>
        </header>
        <main>
            <form action="tarefa2.php" method="POST">
                <label>Digite o 1º número</label><br/>
                <input type="number" name="num1" required/><br/>
                <label>Digite o 2º número</label><br/>
                <input type="number" name="num2" required/><br/><br/>
                <input type="submit" value="Somar"/>
            </form>
            <hr/>
            <?php
                if(isset($_POST['num1'])){
                    $numero1 = $_POST['num1'];
                    $numero2 = $_POST['num2'];
                    $op = $numero1 + $numero2;

                    echo $op;
                }
            ?>
        </main>
    </body>
</html>