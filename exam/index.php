
   
<?php require('controller\index.controller.php'); ?>
<?php include('template\header.php');?>

  <title>Login</title>
    <div class="form">
      
      <ul class="tab-group">
        
        <li class="tab active"><a href="#login"></a></li>

      </ul>
      
     
        
        <div id="login">   
          <h1>Login Page!</h1>
          
          <form action="" method="POST">
          
            <div class="field-wrap">
           
            </label>
            <input type="username" name="username" required placeholder="Enter Username" value ="<?php if(!empty($msg)) echo $username; ?>" autofocus/>
          </div>
          
          <div class="field-wrap">
            <label>
             
            </label>
            <input type="password"required placeholder="Enter Password" name="password"/>
          </div>
          
          
          
          <button name="submit" class="button button-block"/>Log In</button>



              

               <h3 class="awe"><?php if(!empty($special)) echo $special; ?></p></h3>

               <h3 class="awe"><?php if(!empty($msg)) echo $msg; ?></p></h3>

               <h3 class="awe"><?php if(!empty($errrrr)) echo $errrrr; ?></p></h3>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

<?php include('template\footer.php')?>
