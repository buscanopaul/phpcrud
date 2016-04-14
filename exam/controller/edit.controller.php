<?php


require_once("function/function.php");

if(empty($_SESSION['name']))
	{

		header("location: index.php");

	}

if(isset($_POST['update']))
	{

		
		updateUser($_POST);

	}

	$users = getUser();

?>