<?php

namespace Pdo\Dao\dao;
use Pdo\Dao\models\Usuario;

class UsuarioDAO
{
    private \PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function buscarTodosUsuarios():array
    {
        $UsuarioObjeto = [];
        $statement = $this->pdo->prepare("SELECT * FROM alunos");
        $statement->execute();

        $dados  = $statement->fetchAll();

        foreach($dados as $dado) {
            $Usuario = new Usuario($dado['nome'], $dado['email']);
            $Usuario->adicionaId($dado['id']);

            $UsuarioObjeto[] = $Usuario;
        }
        return $UsuarioObjeto;
    }


    public function salvarUsuario(Usuario $usuario)
    {
        $sql = "INSERT INTO alunos(nome,email)values(:nome,:email)";

        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':nome',$usuario->nome());
        $statement->bindValue(':email',$usuario->email());
        return $statement->execute();
    }


    public function atualizarUsuario(Usuario $usuario):bool
    {
        $sql = "UPDATE alunos SET nome = :nome, email = :email WHERE id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':nome', $usuario->nome());
        $statement->bindValue(':email', $usuario->email());
        $statement->bindValue(':id', $usuario->id());
        return $statement->execute();

    }

    public function deletarUsuario($id):void
    {
        $statement = $this->pdo->prepare("DELETE FROM alunos WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->execute();
    }


}