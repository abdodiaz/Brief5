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
                $result = $obj->login($email, $password);
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
                    header("location:http://localhost/mvc/view/home1.php?id=$id");
                }
                elseif($role==0){
                    header("location:http://localhost/mvc/view/home.php?id=$id");
                }
            } else {
                echo "makaynch";
            }
        } else {
            //  header("location:http://localhost/mvc/view/login/index.php");
            echo "<script> alert('login incorecte')<script/>";
        }
    }
    function logout(){
        session_start();
        session_destroy ();
        header("location:http://localhost/mvc/login");
    }
}
