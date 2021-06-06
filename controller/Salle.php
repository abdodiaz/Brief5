<?php
require_once __DIR__ . "/../model/Salles.php";
class Salle
{

	function index()
	{
		session_start();
		if(!empty($_SESSION['sesid'])){
			$obj = new Salles();
			$result= $obj->GetAll();
			require_once __DIR__ . "/../view/salle/index.php";
		}
		else{
			header("location:http://localhost/mvc/");
		}
	}

	function create()
	{
		if (isset($_POST['ajouter'])) {
			$obj = new Salles();
			$obj->Insert($_POST['libelle'], $_POST['capacite']);
			header("location:http://localhost/mvc/salle");
		}
	}


	function edit()
	{
		if(isset($_POST['modifier'])){
            $salle =new Salles();
           	$result=$salle->edit($_POST['id']);
			require_once __DIR__ . "/../view/salle/";
        }
	}

	function update()
	{
		if(isset($_POST['Update']))
		{
			$obj = new Salles();
			$obj->Update($_POST['libelle'], $_POST['capacite'],$_POST['id']);
			header("location:http://localhost/mvc/salle");
		}
	}

	function delete()
	{
		if (isset($_POST['supprimer'])) {
			$obj = new Salles();
			$obj->Delete($_POST['del']);
			header("location:http://localhost/mvc/salle");
		}
	}
}
