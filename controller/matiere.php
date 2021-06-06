<?php
require_once  "/xampp/htdocs/mvc/model/matieremodel.php";
class matiere
{

	function index()
	{
		session_start();
		if(!empty($_SESSION['sesid'])){
			$obj = new matieremodel();
			$result= $obj->GetAll();
			require_once __DIR__ . "/../view/matiere/index.php";	
		}
		else{
			header("location:http://localhost/mvc/");
		}
	}

	function create()
	{
		if (isset($_POST['ajouter'])) {
			$obj = new matieremodel();
			$obj->Insert($_POST['libelle'], $_POST['capacite']);
			header("location:http://localhost/mvc/matiere");
		}
	}


	function edit()
	{
		if(isset($_POST['modifier'])){
            $matiere =new matieremodel();
           	$result=$matiere->edit($_POST['id']);
			require_once __DIR__ . "/../view/matiere/Updatematiere.php";
        }
	}

	function update()
	{
		if(isset($_POST['Update']))
		{
			$obj = new matieremodel();
			$obj->Update($_POST['id'],$_POST['libelle_M']);
			header("location:http://localhost/mvc/matiere");
		}
	}

	function delete()
	{
		if (isset($_POST['supprimer'])) {
			$obj = new matieremodel();
			$obj->Delete($_POST['del']);
			header("location:http://localhost/mvc/matiere");
		}
	}
}
