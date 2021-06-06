<?php
class Login
{
    function index()
    {
        require_once __DIR__ . "/../view/login/index.php";
    }

    function connected()
    {

        if (isset($_POST['Email']) && isset($_POST['Password'])) {
            require_once __DIR__ . "/../model/Loginmodel.php";
            $email = $_POST['Email'];
            $password = $_POST['Password'];
            $obj = new Loginmodel();
            $find = $obj->find($email, $password);
            if ($find == true) {
                $result = $obj->login($email,$password);
                foreach ($result as $row) {
                    session_start();
                   $id= $_SESSION['sesid'] = $row['Id'];
                  $_SESSION['role']=$row['Role'];
                }
                $obj = new Loginmodel();
                $findrole = $obj->getall($_SESSION['sesid']);
                foreach ($findrole as $row) {
                    $role=$row['Role'];
                }
                if($role==1){
                    header("location:http://localhost/mvc/cour?ide=$id");
                }
                elseif($role==0){
                    header("location:http://localhost/mvc/salle?id=$id");

                }
            } else {
                echo( "<div class='alert alert-primary' role='alert'>
                Deja Reserve!
              </div> "); 
            }
        } else {
            echo( "<script> alert('Un champe vide')</script>");
           
           // require_once "/xampp/htdocs/mvc";
        }
    }
    function logout(){
        session_start();
        session_destroy ();
        header("location:http://localhost/mvc/login");
    }
}
