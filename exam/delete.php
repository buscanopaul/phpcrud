<?php require('controller\delete.controller.php'); ?>
<?php include('template\header.php');?>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />

<title>Delete Record!</title>

<div class="col-xs-1 col-md-1" style="float:right;" margin-right= "2cm">
	<a href="home.php"  class="button button-block" align="center">Home</a>

	</div>

		<br>


			<div class="wew">
				<h3  style="color: white">&nbsp;DELETE RECORDS!</h3>
						

								<table class="table table-striped" align="center">
										<tr>

 											<th>Username </th>
 											<th>Password</th>
 											<th>Firstname</th>
 											<th>Lastname</th>
 											<th>Email</th>
 											<th>Gender</th>
 											<th  colspan="3">Birthday</th>
										</tr>
	
							<?php foreach ($users as $user): ?>
			

								<form action="" method="POST">
								
			
 										<tr class="active">
 								
											
											<td><input disabled type="text" name="username" value="<?php echo $user['username']; ?>"></td>
											<td><input disabled type="password" class="form-control" name="password" value="<?php echo $user['password']; ?>"></td>
											<td><input disabled type="text" class="form-control" name="firstName" value="<?php echo $user['firstName']; ?>"></td>
											<td><input disabled type="text" class="form-control" name="lastName" value="<?php echo $user['lastName']; ?>"></td>
											<td><input disabled type="text" class="form-control" name="email" value="<?php echo $user['email']; ?>"></td>
											<td><input disabled type="text" class="form-control" name="gender" value="<?php echo $user['gender']; ?>"></td>

											 

											<td><input disabled type="date" class="form-control" name="birthDate" value="<?php echo $user['birthDate']; ?>"></td>
											
											<td><button type="submit" onclick="return confirm('Are you sure you want to delete this record?')" name="delete" class="btn btn-danger">Delete</button><td>
											
											
		
											
										</tr>

									<input type="hidden" name="id" value="<?php echo $user['id'];?>">
									
									
							</form>

							<?php endforeach; ?>

							</table>

			</div>

<?php include('template\footer.php'); ?>