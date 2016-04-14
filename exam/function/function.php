<?php

require_once("includes/connection.php");


function getUser()
{

	$query =  "SELECT * FROM tbl_users ";

	$result = mysql_query($query);


	while($fetchAssoc = mysql_fetch_assoc($result))
	{

		$info[] = $fetchAssoc;

	}

	if(empty($info))
	{

		return null;

	}

	return $info;





}

function insertUser($post)
{

	$lower = $post['username'];
	$lower = strtolower($lower);

	$fname = $post['firstName'];
	$fname = ucfirst($fname);

	$lname = $post['lastName'];
	$lname = ucfirst($lname);

	$query = "INSERT INTO tbl_users (username, password, firstName, lastName, email, gender, birthDate) 
	VALUES('{$lower}',MD5( '{$post['password']}'), '{$fname}', '{$lname}', '{$post['email']}', '{$post['gender']}', '{$post['birthDate']}') ";

	//echo $query;
	//break;

	$result	= mysql_query($query);

	if($result == false)
	{

		return null;
	}
	return true;
}


function updateUser($post)

{



	$query = "UPDATE tbl_users SET  password = '{$post['password']}' , 

		firstName = '{$post['firstName']}', lastName = '{$post['lastName']}' , email = '{$post['email']}', gender = '{$post['gender']}', birthDate = '{$post['birthDate']}' WHERE id='{$post['id']}' "; 

	//echo $query;
	//break;

	$result	= mysql_query($query);

	if($result == false)
	{

		return null;
	}
	return true;
}

function deleteUser($post)

{



	$query = "DELETE FROM tbl_users WHERE id='{$post['id']}' "; 

	//echo $query;
	//break;

	$result	= mysql_query($query);

	if($result == false)
	{

		return null;
	}
	return true;
}






?>