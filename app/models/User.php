<?php

namespace app\models;
use PDO;

class User extends Model
{
    

    public function Autentication($user, $password)
    {
        $query = $this->connection->prepare("Select username, password from usuarios where username = :email and password = :password");
        $query->execute([
            'email' => $user,
            'password' => $password
        ]);
       return  $query->fetchAll(PDO::FETCH_ASSOC);       
    
    }
    public function GetAllUser($user, $password)
    {
        $query = $this->connection->prepare("Select * from usuarios where username = :email and password = :password");
        $query->execute([
            'email' => $user,
            'password' => $password
        ]);
           $retorno = $query->fetchObject();
        return $retorno;

    }

}