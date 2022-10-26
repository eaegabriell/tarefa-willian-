<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <center>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <meta charset="UTF-8">
    <title>Lista 1</title>
    <meta charset="utf-8">
    <title>Média do Aluno</title>
    </head>
    <body>
        <header>
            <h1>Média do Aluno</h1>
            <hr/>
        </header>
        <main>
            <form action="tarefa5.php" method="POST">
                <label>Valor que recebe por hora:</label><br/>
                <input type="text" name="vhora" required/><br/><br/>
                <label>Quantas horas trabalhou em um mês:</label><br/>
                <input type="number" name="hmes" required/><br/><br/>
                <input type="submit" value="Calcular"/>
            </form>
            <hr/>
            <?php
                if(isset($_POST['vhora'])){
                    $vhora = $_POST['vhora'];
                    $hmes = $_POST['hmes'];
                    $calc = (int)$vhora * $hmes;
                    printf("Total: = " . $calc . "\n");
                }
            ?>
        </main>
    </body>
</html>