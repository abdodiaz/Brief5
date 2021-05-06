<?php
require __DIR__ . "/../Config.php";
class Regmodel
{
    public $con;
    function __construct()
    {
        $this->con=new Config();
    }
    function Insert($name,$prenom,$Email,$password,$id_mat)
    {
        $inserts1="INSERT INTO `user`( `Name`, `Email`, `Password`, `Role`) VALUES('$name','$Email ','$password',1)";
        $SelectMaxid="SELECT max(Id) as Id FROM `user`";
        $x=$this->con->connect($SelectMaxid);
        while ($row =$x->fetch()) 
        {
          $r=htmlspecialchars($row['Id']) ;
        }
        $inserts2="INSERT INTO `enseignant`( `nom`, `prenom`, `email`, `id_Mat`, `id_User`) VALUES('$name','$prenom','$Email',$id_mat,$r)";
        $this->con->connect($inserts1); 
        $this->con->connect($inserts2); 
    }
    function matiereselect(){

                         $query ="Select * from matiere";
                         $result= $this->con->connect($query);
                        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    
}