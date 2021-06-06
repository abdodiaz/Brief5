<?php
require __DIR__ . "/../Config.php";
class Loginmodel
{
    public $con;
    function __construct()
    {
        $this->con=new Config();
    }
    function find($email,$password)
    { 
        $selects="SELECT count(*) FROM `user` WHERE `Email`='$email' and `Password`='$password'";
         $z= $this->con->connect($selects);
        $result= $z->fetchColumn(); 
         if($result>=1)
         { return true;}
         else{return false;}
    }
     function login($email,$password){
        $selects="SELECT * FROM `user` WHERE `Email`='$email' and `Password`='$password'";
        $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC);
     }
     function getall($id){
     
        $selects="SELECT * FROM `user` WHERE `id`=$id";
        $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC);
     }
     function getense($id){
     
        $selects="SELECT * FROM `user` WHERE `id`=$id";
        $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC);
     }
}