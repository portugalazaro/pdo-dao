<?php

use Pdo\Dao\models\Usuario;
use Pdo\Dao\dao\UsuarioDAO;

require_once "../../vendor/autoload.php";
require_once "../../connection.php";


$usuario = new Usuario($_POST['nome'], $_POST['email']);

$usuarioDAO = new UsuarioDAO(connection::criaConexao());

if($usuarioDAO->salvarUsuario($usuario)) {
    echo 'usuario adicionando com sucesso!';
}