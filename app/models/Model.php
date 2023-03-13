<?php

namespace app\models;
use app\framework\database\Connection;
use PDO;
abstract class Model extends Connection
{
  
  public function get($table)
  {

   return $this->connection->query("Select * from ". $table)->fetchAll(PDO::FETCH_ASSOC); 
   
  }

  public function getall($table)
  {
    return $this->connection->query("Select * from ". $table)->fetchObject(); 

  }


}