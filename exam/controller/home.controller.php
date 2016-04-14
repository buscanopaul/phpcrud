<?php


require_once("function/function.php");

if(empty($_SESSION['name']))
	{

		header("location: index.php");

	}

	//$getUser = getUser();


	if(isset($_POST['submit']))
	{

		insertUser($_POST);

	}

	if(isset($_POST['update']))
	{

		updateUser($_POST);

	}

	

	if(isset($_POST['delete']))
	{

		deleteUser($_POST);

	}

	$users = getUser();



	




?>