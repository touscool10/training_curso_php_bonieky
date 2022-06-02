<?php

$arquivo_recebido = $_FILES;

echo '<pre>';
print_r($arquivo_recebido);

$permitidos = ['image/jpeg', 'image/png', 'image/jpg'];

if (in_array($_FILES['arquivo_1']['type'], $permitidos)) {

    $nome = $_FILES['arquivo_1']['name'];
    $extensao_arquivo = explode('.',$nome);
    $extensao_arquivo = $extensao_arquivo[count($extensao_arquivo)-1];

    $novo_nome = md5(time().rand(0,1000)).'.'.$extensao_arquivo;

    move_uploaded_file($_FILES['arquivo_1']['tmp_name'],'arquivos/'.$novo_nome);

} else {
    echo 'Tipo de arquivo não permitido.';
}



?>