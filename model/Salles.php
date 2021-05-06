<?php
require __DIR__ . "/../Config.php";

class Salles
{
    public $con;
    function __construct()
    {
        $this->con=new Config();
    }
    function GetAll()
    { 
        $selects="SELECT * FROM salles";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function Delete($id)
    {
        $deletes="DELETE FROM salles WHERE id=$id";
        $this->con->connect($deletes); 
    }
    function Insert($lib_S,$cap_S )
    {
        $inserts="INSERT INTO `salles`( `libelle_S`, `capacite_S`) VALUES('$lib_S','$cap_S ')";
        $this->con->connect($inserts); 
    }
    function Update($lib_S,$cap_S,$id)
    {
        $update="UPDATE `salles` SET `libelle_S`='$lib_S',`capacite_S`='$cap_S'  WHERE id=$id";
        $this->con->connect($update); 
    }
    function edit($id){

        $query ="SELECT * FROM `salles` where id=$id";
        $result= $this->con->connect($query); 
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
