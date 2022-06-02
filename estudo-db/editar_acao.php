<?php 

//session_start();

require_once "config.php";

$submit = filter_input(INPUT_POST, 'submit') ;
$id = filter_input(INPUT_POST, 'id') ;
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ;
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ;

if ( isset($submit) && $submit === 'Salvar' ) {
    
    if (  !isset($name ) || $name  === "" || !isset($email ) || $email  === ""  ) {

        $warning = "Preenche corretamentos os dois campos!!";
        setcookie('warning', $warning, time()+2);
    
        header("Location: editar.php?id=".$id);
        exit;

    }

    $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email; AND id != :id");
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    //$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

    if ($sql->rowCount() > 0) {

        $warning = "E-mail já cadastrado na db!!";
        setcookie('warning', $warning, time()+2);
        header("Location: editar.php");
        exit;

    }

    $sql = $pdo->prepare("  UPDATE usuarios SET name = :name, email =:email WHERE id =:id");

    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    if( $sql->rowCount() === 1) {

        $warning = "Usuário editado com sucesso!!";
        setcookie('warning', $warning, time()+2);
        header("Location: index.php");
        exit;
    } 

}
 
?>