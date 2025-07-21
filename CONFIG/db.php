<?php
class Database{
    protected $conn;
    public function connect(){
   $dsn = "mysql:host=localhost;dbname=ecom_db;port=3306";
   $this->conn = new PDO($dsn, "root", "");
   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   return $this->conn;
    }
}
?> 