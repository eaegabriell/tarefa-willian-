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
            <form action="tarefa3.php" method="POST">
                <label>Aluno</label><br/>
                <input type="text" name="aluno" required/><br/><br/>
                <label>Nota 1</label><br/>
                <input type="number" name="n1" required/><br/><br/>
                <label>Nota 2</label><br/>
                <input type="number" name="n2" required/><br/><br/>
                <label>Nota 3</label><br/>
                <input type="number" name="n3" required/><br/><br/>
                <label>Nota 4</label><br/>
                <input type="number" name="n4" required/><br/><br/>
                <input type="submit" value="Calcular"/>
            </form>
            <hr/>
            <?php
                if(isset($_POST['aluno'])){
                    $aluno = $_POST['aluno'];
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $n3 = $_POST['n3'];
                    $n4 = $_POST['n4'];
                    $soma = (int)$n1 + $n2 + $n3 + $n4;
                    $media = (int)($soma / 4); 
                    printf("Aluno: = " . $aluno . "\n");
                    printf("Média: = " . $media . "\n");
                }
            ?>
        </main>
    </body>
</html>