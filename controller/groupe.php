<?php
require_once  "/xampp/htdocs/mvc/model/groupemodel.php";
class groupe
{

	function index()
	{
		session_start();
		if(!empty($_SESSION['sesid'])){
			$obj = new groupemodel();
			$result= $obj->GetAll();
			require_once __DIR__ . "/../view/groupe/index.php";	
		}
		else{
			header("location:http://localhost/mvc/");
		}
	}

	function create()
	{
		if (isset($_POST['ajouter'])) {
			$obj = new groupemodel();
			$obj->Insert($_POST['libelle'], $_POST['capacite']);
			header("location:http://localhost/mvc/groupe");
		}
	}


	function edit()
	{
		if(isset($_POST['modifier'])){
            $groupe =new groupemodel();
           	$result=$groupe->edit($_POST['id']);
			require_once __DIR__ . "/../view/groupe";
        }
	}

	function update()
	{
		if(isset($_POST['Update']))
		{
			$obj = new groupemodel();
			$obj->Update($_POST['id'],$_POST['libelle_g']);
			header("location:http://localhost/mvc/groupe/");
		}
	}

	function delete()
	{
		if (isset($_POST['supprimer'])) {
			$obj = new groupemodel();
			$obj->Delete($_POST['del']);
			header("location:http://localhost/mvc/groupe");
		}
	}
}
