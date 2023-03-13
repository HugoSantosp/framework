<?php

namespace app\framework\database;

use Exception;
use PDO;

abstract class Connection
{

    protected $connection;

    public  function __construct()
    {
        $this->getconnection();
    }

    private function getconnection()
    {

        try{
            $this->connection = new PDO("mysql:host={$_ENV['DATABASE_HOST']}; dbname={$_ENV['DATABASE_NAME']}", "{$_ENV['DATABASE_USER']}", "{$_ENV['DATABASE_PASSWORD']}"); 
        }catch(Exception $e)
        {
            echo "Erro ao conectar no banco de dados" . $e;
        }
      

    }

}