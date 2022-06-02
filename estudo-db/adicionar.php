<?php 
//session_start();

$aviso = isset($_COOKIE["warning"]) && $_COOKIE["warning"] != '' ? $_COOKIE["warning"] :  "" ;

?>

<h1>Adicionar usuário</h1>

<a href="index.php">Lista dos usuários</a><br><br>



    <form action="adicionar_action.php" method="POST">
        <label for="name">Nome: </label>
        <input type="text" id="name" name="name" placeholder="Digite o nome"><br><br>
        <label for="email">E-mail: </label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail"><br><br>

        <input type="submit" id="submit" name="submit" value="Enviar"><br><br>

        <br><br>
        <p id="warning" style="color: red; font-size: 30px"> 
            <?php  
                if ($aviso && $aviso != '') {
                    echo $aviso;
                }
            ?> 
        </p>
    </form>

    <script>



    </script>

</body>
</html>