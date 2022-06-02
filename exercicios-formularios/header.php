<h1> Meu Primeiro Site </h1><br/><hr><br/>


<?php

if ( isset($_COOKIE['nome']) ) {
    echo '<h2>' .$_COOKIE['nome'] . '<h2><br>' ;
}
?>