<?php

use Pdo\Dao\dao\UsuarioDAO;
use Pdo\Dao\models\Usuario;

require_once "../../vendor/autoload.php";
require_once "../../connection.php";


$UsuarioUpdate = new UsuarioDAO(connection::criaConexao());

$usuario = new Usuario($_POST['nome'], $_POST['email']);
$usuario->adicionaId($_POST['id']);

$UsuarioUpdate->atualizarUsuario($usuario);

// require_once "../views/atualizarUsuarioFormulario.php";
header("Location: ../../index.php");

