<?php 

copy('pasta/texto.txt','textovvdv.txt',);


/* 
 if (file_exists('lista_nomes.txt')) {
    unlink('lista_nomes.txt');
    exit;
}  */

$submit = filter_input(INPUT_POST,'submit');
$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

if ( isset($submit) && isset($name) && $name != '' ) {

    if (!file_exists('lista_nomes.txt')) {

        file_put_contents('lista_nomes.txt',$name);

    } else {
        
        $fileContent = file_get_contents('lista_nomes.txt');
        $fileContent .=  "\n"; 

        $listaNomes = $fileContent . $name; 
        file_put_contents('lista_nomes.txt',$listaNomes);
    }

  }

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

    <form method="POST">
        <label for="name">Novo Nome:</label><br>
        <input style="margin-right: 5px;" type="text" id="name" name="name">
        <input type="submit" id="submit" name="submit" value="Adicionar">
    </form>

    <h1>Lista de nomes</h1>

    <?php 

        if (file_exists('lista_nomes.txt')) {
            $conteudo_lista = file_get_contents('lista_nomes.txt');
            $conteudo_lista_array = explode("\n",$conteudo_lista) ;
        }

        if ( isset($conteudo_lista_array) && count($conteudo_lista_array) > 0 ) {
            echo '<ul>';
            foreach($conteudo_lista_array as $nome) {
                    echo '<li>' . $nome . '</li>';
            }        
            echo '</ul>';
        }

    ?>

</body>
</html>