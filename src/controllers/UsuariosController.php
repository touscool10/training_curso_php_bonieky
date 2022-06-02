<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuarios;

class UsuariosController extends Controller {


    public function create() {
        $this->render('createUser', [] );
        
    }

}

