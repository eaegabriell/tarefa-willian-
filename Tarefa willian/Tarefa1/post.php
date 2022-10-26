<?php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereço"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    include 'index.php';
    echo 'Nome: ' . $nome . "<br>";
    echo 'Telefone: ' . $telefone . "<br>";
    echo 'E-mail: ' . $email . "<br>";
    echo 'Data de Nascimento: ' . $nascimento . "<br>";
    echo 'CEP: ' .$cep  . "<br>";
    echo 'Endereço: ' . $endereco . "<br>";
    echo 'Cidade: ' .$cidade  . "<br>";
    echo 'Estado: ' . $estado . "<br>";
?>

