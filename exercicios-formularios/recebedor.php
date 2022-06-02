<?php

session_start();

$name   = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ;
$age    = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT) ;
$email  = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);


/* if (!$submit) {
    Header('Location: index.php');
}  */

if ($name && $email  && $age) {

    $expiracao = time() + (86400 * 30);
    setcookie('nome', $name, $expiracao);


 
    echo 'Nome: '. $name . '<br><br>';
    echo 'Idade: '. $age . '<br><br>';
    echo 'E-mail: '. $email . '<br><br>';
} else {

    $_SESSION['aviso'] = 'Preencha os itens corretamente<br><br>';

    header('Location: index.php'); 
    exit;
}

?>