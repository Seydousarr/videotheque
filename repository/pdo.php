<?php
namespace Connection;

class Connect
{
    protected function connect()
    {//les class appelées dans un namlespace qui appartiennent à PHP doivent etre precedées de \ ex: \PDO
        return new \PDO('mysql:host=localhost;dbname=netflix;charset=utf8', 'root', '', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ]);
    }
}
?>