<?php

use Pdo\Dao\dao\UsuarioDAO;

require_once "../../vendor/autoload.php";
require_once "../../connection.php";


$usuarioDAO = new UsuarioDAO(connection::criaConexao());

$usuarioDAO->deletarUsuario($_GET['id']);
header("Location: ../controller/listarUsuarios.php");
