<?php
session_start();

$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

if (!isset($name) || (isset($name) && $name == '') ) {
    header('Location: login.php');
    exit;
}

if (isset($name) && $name != ''  ) {
    $_SESSION['namePreenchida'] = $name;
    echo 'Olá, '. $_SESSION['namePreenchida'] .' - ';
    echo "<a href='login.php'>Sair</a>"; 
    
} else {
    header('Location: login.php');
    exit;
}

?>