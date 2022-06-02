<?php 

//session_start();


require_once "config.php";

$submit = filter_input(INPUT_POST, 'submit') ;
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ;
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ;

if ( isset($submit) && $submit === 'Enviar' ) {
    
    if (  !isset($name ) || $name  === "" || !isset($email ) || $email  === ""  ) {

        $warning = "Preenche corretamentos os dois campos!!";
        setcookie('warning', $warning, time()+5);
        header("Location: adicionar.php");
        exit;

    }

    $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email;");
    $sql->bindValue(':email', $email);
    $sql->execute();

    //$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    if ($sql->rowCount() > 0) {

        $warning = "E-mail já existe na db!!";
        setcookie('warning', $warning, time()+5);
        header("Location: adicionar.php");
        exit;

    }

    $sql = $pdo->prepare("INSERT INTO usuarios (name, email) VALUES (:name, :email)");

    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);

    $sql->execute();

    if( $sql->rowCount() === 1) {

        $warning = "Usuário adicionado com sucesso!!";
        setcookie('warning', $warning, time()+5);
        header("Location: adicionar.php");
        exit;
    } 

}
 
?>