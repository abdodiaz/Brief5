<?php
require_once __DIR__ . "/../model/Regmodel.php";
class Register{
    function index(){
        $obj = new Regmodel();
	    $matieres=$obj->matiereselect();
        require_once __DIR__ ."/../view/login/Registerpage.php";  
    }
 function create()
{
    if (isset($_POST['Register'])) {
        $obj = new Regmodel();
        $obj->Insert($_POST['namme'], $_POST['prenom'],$_POST['email'],$_POST['password'],$_POST['id_Mat']);
        header("location:http://localhost/mvc");
    }
}
}