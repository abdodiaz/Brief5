<?php
require_once __DIR__ . "/../model/courmodel.php";
session_start();
class cour
{

	function index()
	{
		
		if(!empty($_SESSION['sesid'])){
			$obj = new courmodel();
			$result= $obj->GetAll();
			$resultsalle= $obj->Getsale();
			$resultgroupe=$obj->Getgroupe();
			require_once __DIR__ . "/../view/reservation.php";
		}
		else{
			header("location:http://localhost/mvc/cour");
		}
	}

	function create()
	{
		if (isset($_POST['ajouter'])) {

			
			$obj = new courmodel();
			$find=$obj->find($_POST['hr_db'], $_POST['hr_f'],$_POST['time'],$_POST['id_S']);
			if($find==true){
				echo( "<script> alert('deja reserver')</script>"); 
			}else{
				$obj->Insert($_POST['hr_db'], $_POST['hr_f'],$_POST['time'],$_POST['id_S'],$_POST['ide'],$_POST['id_g']);
				header("location:http://localhost/mvc/cour");
			}
			
		}
	}


	function edit()
	{
		if(isset($_POST['modifier'])){
            $cour =new courmodel();
           	$result=$cour->edit($_POST['id']);
			require_once __DIR__ . "/../view/reservation.php";
        }
	}

	function update()
	{
		if(isset($_POST['Update'])){
			$obj = new courmodel();
			$obj->Update($_POST['hr_db'], $_POST['hr_f'],$_POST['time'],$_POST['id_S'],$_POST['ide'],$_POST['id_g'],$_POST['id']);
			header("location:http://localhost/mvc/cour");
		}
	}

	function delete()
	{
		if (isset($_POST['supprimer'])) {
			$obj = new courmodel();
			$obj->Delete($_POST['del']);
			header("location:http://localhost/mvc/cour");
		}
	}

}
