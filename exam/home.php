<?php require('controller\home.controller.php'); ?>
<?php include('template\header.php');?>



	<title>Home</title>
	

			<h3 align="center">Hi, 
			<?php if(!empty($_SESSION['name'])): ?>
			<?php echo ucwords($_SESSION['name']); ?>
			<?php endif; ?> </h3>



    <div class="form">
      
      <ul class="tab-group">
        
        <li ><a href="controller\logout.controller.php" class="tab active">LOGOUT</a></li>

      </ul>
      
     
        
        <div id="login">   
          <h1>Welcome!</h1>
          
 
           	<a href="add.php" class="button button-block" align="center">ADD RECORD!</a>
           	<a href="edit.php" class="button button-block" align="center">EDIT RECORD!</a>
           	<a href="delete.php" class="button button-block" align="center">DELETE RECORD!</a>
           	


       

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->



		






<?php include('template\footer.php'); ?>

