<?php
class Home {
    function index()
    {
      session_start();
      if(!empty($_SESSION['sesid'])){
      
        if($_SESSION['role']==1){
          require_once __DIR__. "/../view/reservation.php";
        }
        else{
          require_once __DIR__. "/../view/reservation.php";
        }
      }
      else{
        require_once __DIR__. "/../view/login/index.php";
      }
    }
}