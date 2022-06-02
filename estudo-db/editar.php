<?php 

//session_start();

require_once "config.php";
$user = [];

$aviso = isset($_COOKIE["warning"]) && $_COOKIE["warning"] != '' ? $_COOKIE["warning"] :  "" ;
echo $aviso. '<br><br>';
$id = filter_input(INPUT_GET, 'id') ;

echo 'id = ' . $id . '<br><br>';

if (  !$id ) {

    echo 'te pegeuei 1';
    $warning = "Não foi possível editar o usuário ou Usuário não encontrado";
    setcookie('warning', $warning, time()+2);
    header("Location: index.php");
    exit;

}

if ($id) {

    $sql = $pdo->prepare("SELECT id, name, email FROM usuarios WHERE id = :id;");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ( $sql->rowCount() === 0  ) {
        echo 'te pegeuei 2';
   
        $warning =  "Não foi possível editar o usuário ou Usuário não encontrado";
        setcookie('warning', $warning, time()+2);
        header("Location: index.php");
        exit;
    
    }

    if ($sql->rowCount() > 0) {

        $user = $sql->fetch(PDO::FETCH_ASSOC);
    }

}
 
?>



<h1>Editar usuário</h1>

<a href="index.php">Lista dos usuários</a><br><br>

    <form action="editar_acao.php" method="POST"> 
        <label for="name">Nome: </label>
        <input style="width: 305px ;"  type="text" id="name" name="name" value="<?=utf8_encode($user['name'])?>"><br><br>
        <label for="email">E-mail: </label>
        <input style="width: 300px ;" type="email" id="email" name="email" value="<?=utf8_encode($user['email']) ?>"><br><br>
        <input type="hidden" name="id" value="<?=$user['id']?>">

        <input type="submit" id="submit" name="submit" value="Salvar"><br><br>

    </form>

        <p id="warning" style="color: red; font-size: 30px"> 
            <?php  
                if ($aviso && $aviso != '') {
                    echo $aviso;
                }
            ?> 
        </p>

    <script>



    </script>

</body>
</html>
