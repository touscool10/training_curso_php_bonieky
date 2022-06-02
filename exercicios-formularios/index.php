<?php

session_start();

require("header.php");

echo $_SESSION['aviso'] ?? '';
$_SESSION['aviso'] = '';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de PHP</title>
    <style type="text/css">
        
    </style>
</head>
<body>


<a href="apagar.php">Apagar Cookie</a><br><br>

    <form method="GET" action="recebedor.php">
        <label for="name">Digite o nome: </label>
        <input  type="text" name="name" id="name" placeholder="Nome"><br/><br/>
        <label for="email">Digite o email: </label>
        <input  type="text" name="email" id="email" placeholder="E-mail"><br/><br/>
        
        <label for="name">Digite a idade: </label>
        <input  type="text" name="age" id="age" placeholder="idade"><br/><br/>
        <button type="submit" id="submit" name="submit" value="submit">Enviar</button><br/><br/>
    </form>

</body>
</html>