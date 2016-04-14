<?php
session_start();

require_once("function/function.php");

if(isset($_POST['submit']))
	{

		if(ctype_alpha($_POST['username']))
		{

			

				insertUser($_POST);

		

		}
		else
		{

			$username= $_POST['username'];

			$special = "Please no special Character!";

		}


	}

	$users = getUser();

?>