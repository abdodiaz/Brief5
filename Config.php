<?php
class Config{

    public $servername='localhost';
    public $dbname='ecole';
    public $user='root';
    public $pass='';

    public function connect($query){
        try {
           $db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->user, $this->pass);
           return $db->query($query);  
        } catch (PDOException $e) {
            print "Erreur :" . $e->getMessage() . "<br>";
            die();
        }
        return null;
    }
}
