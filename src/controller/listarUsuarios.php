<?php

use Pdo\Dao\dao\UsuarioDAO;

require_once "../../vendor/autoload.php";
require_once "../../connection.php";

$usuarioDao = new UsuarioDAO(connection::criaConexao());

$usuarios = $usuarioDao->buscarTodosUsuarios();

require_once "../views/listarUsuarios.php";
