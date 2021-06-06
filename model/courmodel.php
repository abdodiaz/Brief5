<?php
require __DIR__ . "/../Config.php";

class courmodel
{
    public $con;
    function __construct()
    {
        $this->con=new Config();
    }
    function GetAll()
    { 
        $selects="SELECT * FROM `cours`";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    function Delete($id)
    {
        $deletes="DELETE FROM `cours` WHERE id=$id";
        $this->con->connect($deletes); 
    }
    function Insert($hr_db,$hr_f,$time,$id_S,$id_E,$id_g)
    {
        $inserts="INSERT INTO `cours`(`hr_db`, `hr_f`, `time`, `id_S`, `id_E`, `id_g`) VALUES ('$hr_db','$hr_f','$time',$id_S,$id_E,$id_g)";
        $this->con->connect($inserts); 
    }
    function Update($hr_db,$hr_f,$time,$id_S,$id_E,$id_g,$id)
    {
        $update="UPDATE `cours` SET `hr_db`='$hr_db',`hr_f`='$hr_db', `time`='$time',`id_S`=$id_S ,`id_g`=$id_g WHERE id=$id";
        $this->con->connect($update); 
    }
    function edit($id){

        $query ="SELECT * FROM `cours` where id=$id";
        $result= $this->con->connect($query); 
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function Getsale()
    { 
        $selects="SELECT * FROM salles";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    function Getgroupe()
    { 
        $selects="SELECT * FROM groupe";
         $z= $this->con->connect($selects);
        return $z->fetchAll(PDO::FETCH_ASSOC); 
    }
    function find ($hdb,$hfin,$tm,$ids){
        $selects="SELECT count(*) FROM `cours` WHERE `hr_db`='$hdb'and`hr_f`='$hfin'and `time`='$tm'and `id_S`=$ids";
        $z= $this->con->connect($selects);
        $result= $z->fetchColumn(); 
         if($result>=1)
         { return true;}
         else{return false;}
    }
}
