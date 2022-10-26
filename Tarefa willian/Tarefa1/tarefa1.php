<!DOCTYPE html>
<html lang="pt-br">
<head>
    <center>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <meta charset="UTF-8">
    <title>Lista 1</title>
</head>
    <body>
        <form action="post.php?xget=50" method="POST">
    <fieldset>
            </br>
            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
            </p>
            <p>
                <label for="telefone">Telefone: </label>
                <input type="number" name="telefone" id="telefone">
            </p>
            <p>
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="nascimento">Data de Nascimento: </label>
                <input type="date" name="nascimento" id="nascimento">
            </p>
            <p>
                <label for="cep">CEP: </label>
                <input type="number" name="cep" id="cep">
            </p>
            <p>
                <label for="endereço">Endereço: </label>
                <input type="text" name="endereco" id="endereco">
            </p>
            <p>
                <label for="cidade">Cidade: </label>
                <input type="text" name="cidade" id="cidade">
            </p>
            <p>
                <label for="estado">Estado: </label>
                <input type="text" name="estado" id="estado">
            </p>
        </fieldset>
        <p>
            <input type="submit" value="Enviar" id="enviar">
        </p>
        </form>
    </body>
</html>