<?php
session_start();
unset($_SESSION['namePreenchida']);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hcode.com.br</title>
    <style type="text/css">
        
    </style>
</head>
<body>

<form action="index.php" method="POST">

    <label for="name">Qual é seu nome?</label><br>
    <input type="text" id="name" name="name" ><br>
    <input type="submit" value="Salvar">

</form>

</body>
</html>