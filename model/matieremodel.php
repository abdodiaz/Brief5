<?php
require __DIR__ . "/../Config.php";

class matieremodel
{
    public $con;
    function __construct()
    {
        $this->con=new Config();
    }
    function GetAll()
    { 
        $selects="SELECT * FROM `matiere`";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function Delete($id)
    {
        $deletes="DELETE FROM `matiere` WHERE id=$id";
        $this->con->connect($deletes); 
    }
    function Insert($libelle_M )
    {
        $inserts="INSERT INTO `matiere`(`libelle_M`) VALUES ('$libelle_M')";
        $this->con->connect($inserts); 
    }
    function Update($id,$libelle_M)
    {
        $update="UPDATE `matiere` SET `libelle_M`='$libelle_M'  WHERE id=$id";
        $this->con->connect($update); 
    }
    function edit($id){

        $query ="SELECT * FROM `matiere` where id=$id";
        $result= $this->con->connect($query); 
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}