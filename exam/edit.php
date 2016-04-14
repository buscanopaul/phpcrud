<?php require('controller\edit.controller.php'); ?>
<?php include('template\header.php');?>

<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<div class="col-xs-1 col-md-1" style="float:right;">
	<a href="home.php"  class="button button-block" align="center">Home</a>

</div>
<title>Edit Record!</title>

			<br>
					
			<div class="wew">
				<h3  style="color: white">&nbsp;EDIT RECORDS!</h3>
						

								<table class="table table-hover" align="center">
										<tr class="active">

 											<th>Username </th>
 											<th>Password</th>
 											<th>Firstname</th>
 											<th>Lastname</th>
 											<th>Email</th>
 											<th>Gender</th>
 											<th colspan="3">Birthday</th>
										</tr>
							
							<?php if(empty($user)): ?>
							<?php foreach ($users as $user): ?>
			

								<form action="" method="POST">
								
			
 										<tr class="active">
 								
											
											<td><input required type="text" disabled class="form-control"  name="username" value="<?php echo $user['username']; ?>"></td>
											<td><input required type="password" class="form-control" name="password" value="<?php echo $user['password']; ?>"></td>
											<td><input required type="text" class="form-control" name="firstName" value="<?php echo $user['firstName']; ?>"></td>
											<td><input required type="text" class="form-control" name="lastName" value="<?php echo $user['lastName']; ?>"></td>
											<td><input required type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>"></td>
											

											<td><select name="gender">
												<option value="1"<?php if($user['gender'] == "Male" ) echo 'selected="selected"';?>>Male</option>
												<option value="2"<?php if($user['gender'] == "Female") echo 'selected="selected"';?>>Female</option>
											</select></td>

											 

											<td><input type="date" required class="form-control" name="birthDate" value="<?php echo $user['birthDate']; ?>"></td>
											
											<td><button type="submit" onclick="return confirm('Are you sure you want to update this record?')" name="update" class="btn btn-warning">Update</button><td>
											
											
		
											
										</tr>

									<input type="hidden" name="id" value="<?php echo $user['id'];?>">
									
									
							</form>

							<?php endforeach; ?>
						<?php endif; ?>

							</table>

			</div>

<?php include('template\footer.php'); ?>