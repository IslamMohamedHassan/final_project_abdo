<?php

class DB {
    private $conn ; 
    public $table; 
    public $sql = ""; 
    public $connectionStatus  ;
    public static function table ($tableName){
        $obj= new self ; 
        $obj->table = $tableName;
        return $obj ; 
    }
    public function  connect(){
        $config = getConfig('DATABASE'); 
        try {
            $this->conn = new PDO("mysql:host=$config->HOST;dbname=$config->DATABASE", $config->USER, $config->PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connectionStatus= "Connected successfully";
        } catch(PDOException $e) {
            $this->connectionStatus= "Connection failed: " . $e->getMessage();
        }
    }
    public function close(){
        $this->conn= NULL ; 
    }
    public function raw (string $statment){
        $this->connect(); 
        return $this->conn->query($statment);
    }
    public function insert (array $data){
        $this->connect();
        $keys = '';
        $values = '';
        foreach ($data as $key=>$value){
            $keys .= $key.',';
            $values .= $value.',';
        }
        $this->sql = "INSERT INTO $this->table ( ".rtrim($keys,',')." ) VALUES ( '".trim($values , ',')."' )";
        return $this;  
    }
    public function select(string $column = '*'){
        $this->connect();
        $this->sql.="SELECT $column FROM $this->table";
        return $this;
    }
    public function delete(){
        $this->connect();
        $this->sql = "DELETE FROM $this->table ";
        return $this;
    }
    public function update(array $data){ 
        $this->connect();
        $keysValues = '';
        foreach ($data as $key=>$value){
            $keysValues .= $key.'=' .'\''.$value.'\''.',';
        }
        $this->sql = "UPDATE $this->table SET ".rtrim($keysValues , ',');
        return $this;
    }
    public function where(string $condition){
        $this->sql .= " WHERE $condition "; 
        return $this; 
    }
    public function leftJoin(string $tableToJoin , string $relation){
        $this->connect(); 
        $this->sql .= " LEFT JOIN $tableToJoin ON $relation";
        return $this;
    }
    public function rightJoin(string $tableToJoin , string $relation){
        $this->connect(); 
        $this->sql .= " RIGHT JOIN $tableToJoin ON $relation";
        return $this;
    }
    public function innerJoin(string $tableToJoin , string $relation){
        $this->connect(); 
        $this->sql .= " INNER JOIN $tableToJoin ON $relation";
        return $this;
    }
    public function first(){
        $records = $this->conn->query($this->sql.' limit 1');
        return $records->fetchObject();
    }
    public function get(){
        $records = $this->conn->query($this->sql);
        return $records->fetchAll(PDO::FETCH_CLASS);
    }
    public function  exec(){
        $this->conn->query($this->sql);
        $this->close(); 
    }

}

