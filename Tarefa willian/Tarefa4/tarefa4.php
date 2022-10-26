<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <center>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <meta charset="UTF-8">
    <title>Lista 1</title>
    <meta charset="utf-8">
    <title>Converter Metros em Centímetros</title>
    </head>
    <body>
        <header>
            <h1>Converter Metros em Centímetros</h1>
            <hr/>
        </header>
        <main>
            <form action="tarefa4.php" method="POST">
                <label>Metros</label><br/>
                <input type="number" name="m" required/><br/><br/>
                <input type="submit" value="Converter"/>
            </form>
            <hr/>
            <?php
                if(isset($_POST['m'])){
                    $m = $_POST['m'];
                    $m = (int)($m * 100); 
                    printf("Centímetros = " . $m . "\n");
                }
            ?>
        </main>
    </body>
</html>