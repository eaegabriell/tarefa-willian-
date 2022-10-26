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
            <form action="tarefa6.php" method="POST">
                <label>Peso:</label><br/>
                <input type="text" name="peso" required/><br/><br/>
                <label>Altura:</label><br/>
                <input type="number" name="altura" required/><br/><br/>
                <input type="submit" value="Calcular"/>
            </form>
            <hr/>
            <?php
                if(isset($_POST['peso'])){
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    
                    function imc($altura, $peso){
                    $altura = str_replace(',', '.', $altura);
                    $result = $peso/$altura**2;
                    return $result;
                    
                    }
                    
                    echo"Seu IMC é: " .imc($altura , $peso);
                }
            ?>
        </main>
    </body>
</html>