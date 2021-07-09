<?php

class Database
{
    public static $conn;
    public function __construct()
    {
        try
        {  
            $dsn = DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME;
            self::$conn = new PDO($dsn,DB_USER,DB_PASS);

        }catch(PDOException $e)
        {
          die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if(self::$conn){
            return self::$conn;
        }

        return $instance =  new self();
    }

    public function read($query,$data = []){
        $stmt = self::$conn->prepare($query);
        $result = $stmt->execute($data);
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
       if($result)
       {
        if(is_array($data))
        {
            return $data;
        }
        }

        return false;
   
    }

    public function write($query,$data = []){
        $stmt = self::$conn->prepare($query);
        $result = $stmt->execute($data);
       if($result)
       {
         return true;
       }

        return false;
   
    }

}
