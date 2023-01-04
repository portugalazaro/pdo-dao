<?php

namespace Pdo\Dao\models;

class Usuario
{
    private int $id;
    private string $nome;
    private string $email;


    public function __construct($nome, $email)
    {
        $this->nome = $this->validaNome($nome);
        $this->email = $email;
    }

    public function id():int
    {
        return $this->id;
    }

    public function adicionaId($id):void
    {
        $this->id = $id;
    }

    private function validaNome($nome):string
    {
        $nome = trim($nome);

        if(strlen($nome) > 2){
            return $nome;
        }
        
        return md5($nome);

    }

    public function nome():string
    {
        return $this->nome;
    }

    public function email():string
    {
        return $this->email;
    }

    // public function alteraEmail($email):void
    // {
    //     $this->email = $email;
    // }

}