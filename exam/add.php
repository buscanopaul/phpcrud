
   
<?php require('controller\add.controller.php'); ?>
<?php include('template\header.php');?>
<!--<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />-->

 <title>Add Record!</title>
    <div class="form">
      
      <ul class="tab-group">
        

        <li ><a href="home.php" class="tab active">HOME</a></li>

      </ul>

      
     
        
        <div id="login">   
          <h3 class="its1">ADD RECORD!</h1>
          
         <form action=" " method="POST">
          
            <div class="field-wrap">
            
            </label>
            <input type="username" name="username" required placeholder="Enter Username" value ="" maxlength="10" autofocus/>
          </div>
          
          <div class="field-wrap">
            <label>
            
            </label>
            <input type="password" required placeholder="Enter Password" name="password" maxlength="32" minlength="8"/>
          </div>

           <div class="field-wrap">
            <label>
             
            </label>
            <input type="text" required placeholder="Enter Firstname" name="firstName"/>
          </div>

           <div class="field-wrap">
            <label>
             
            </label>
            <input type="text" required placeholder="Enter Lastname" name="lastName"/>
          </div>

          <div class="field-wrap">
            <label>
            
            </label>
            <input type="email" required placeholder="enter@email.com" name="email"/>
          </div>

         
          <h3 class="awe">Select gender:</h3>

        <div class="controlin">
         
            <select class="field-wrap" name="gender" >
            <option value="Male" name="male">Male</option>
            <option value="Female" name="female">Female</option>
            </select> 
         </div>

          <div class="field-wrap">
            <label>
             
            </label>
            <input type="date" required placeholder="Enter Birthday" name="birthDate"/>
          </div>
        

          
          
          
          <button name="submit" onclick="valid()" class="button button-block"/>Save!</button>

          <h3 class="awe"><?php if(!empty($special)) echo $special; ?></h3>

           <h3 class="awe"><?php if(!empty($msg)) echo $msg; ?></h3>

           <h3 class="awe"><?php if(!empty($errrrr)) echo $errrrr; ?></h3>




         

          
    </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->









<?php include('template\footer.php')?>
