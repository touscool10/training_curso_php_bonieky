<?php 

//session_start();

require_once "config.php";

    $id = filter_input(INPUT_GET, 'id') ;

    if (  !isset($id ) || $id  === "" || $id  === null ) {

        $warning = "Não foi possível excluir o usuário ou Usuário não encontrado!!";


    }

    if ( isset($id) ) {
        
        $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $warning = "Usuário EXCLUIDO com sucesso!!";

        }

    }

    setcookie('warning', $warning, time()+5);
    header("Location: index.php");
    exit;
 
?>