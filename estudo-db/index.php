<?php


require_once "config.php";

$dados = [];
$sql = $pdo->prepare("SELECT * FROM usuarios;");
$sql->execute();

if ($sql->rowCount() > 0) {  
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style type="text/css">
        a {
            margin-left: 5px; 
            margin-right: 5px ; 
            }


    </style>
</head>
<body>

<h1>Lista dos usuários</h1>

<a href="adicionar.php">ADICIONAR USUÁRIO</a><br><br>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>ID</th>        
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>

    </thead>

    <tbody>

        <?php foreach ($dados as $key => $dado) : ?>

            <tr>
                <td> <?= $dado["id"] ?> </td> 
                <td> <?= $dado["email"] ?> </td> 
                <td> <?= utf8_encode($dado["name"])?> </td>       
                <td> <a href="editar.php?id=<?= $dado['id'] ?>" >[ Editar ]</a> | <a href="excluir.php?id=<?= $dado['id'] ?>" onclick="return confirm('Tem Certeza que deseja excluir?')"> [ Excluir ]</a> </td> 
            </tr>

            <?php endforeach;   ?>  
    </tbody>
</table>
    

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script>
/* 
     var deleteButton = document.querySelector('#delete-btn'); 
    deleteButton.addEventListener('click', function() {

        alert("Deseja realmente excluir esse usuário?");

    });  */

</script>

</body>
</html>