<?php
session_start();

require_once("function/function.php");

if(isset($_POST['delete']))
	{

		
		deleteUser($_POST);

	}

	$users = getUser();

?>