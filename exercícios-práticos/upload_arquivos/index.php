<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
    <style type="text/css">
        
    </style>
</head>
<body>

    <form action="recebedor.php" method="post" enctype="multipart/form-data"> 
        <label for="arquivo">Carregue seu arquivo</label>
        <input type="file" id="arquivo" name="arquivo_1"><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>