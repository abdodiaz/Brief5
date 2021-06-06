<?php
require __DIR__ . "/../Config.php";

class groupemodel
{
    public $con;
    function __construct()
    {
        $this->con=new Config();
    }
    function GetAll()
    { 
        $selects="SELECT * FROM `groupe`";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function Delete($id)
    {
        $deletes="DELETE FROM `groupe` WHERE id=$id";
        $this->con->connect($deletes); 
    }
    function Insert($libelle_G )
    {
        $inserts="INSERT INTO `groupe`(`libelle_g`) VALUES ('$libelle_G')";
        $this->con->connect($inserts); 
    }
    function Update($id,$libelle_g)
    {
        $update="UPDATE `groupe` SET `libelle_g`='$libelle_g'  WHERE id=$id";
        $this->con->connect($update); 
    }
    function edit($id){

        $query ="SELECT * FROM `groupe` where id=$id";
        $result= $this->con->connect($query); 
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}