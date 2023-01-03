<?php



class Connection
{
    public static function criaConexao()
    {
        $dsn = "mysql:host=localhost;dbname=pdoB7";
        $user = "root";
        $pass = "adminlpds";
        $connection = new PDO($dsn, $user, $pass); 
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $connection;
    }

}