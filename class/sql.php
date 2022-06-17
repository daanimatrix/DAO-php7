<?php

class Sql extends PDO {

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=mafiscred1", "Daniel", "123456789");
    }

    private function setParams($statment, $parameters = array()){
        foreach($parameters as $key => $value){

            $stmt->setParam($key, $value);
        }
    }

    private function setParam($statmen, $key, $value){
        $statment->bindParam($key,$value);
    }

    public function query2($rawQuery, $params = array()){

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt,$params );

        $stmt->execute();

        return $stmt;


    }

    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->query2($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




}

?>