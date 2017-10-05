<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Reset</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style1.css" rel="stylesheet" type="text/css">

    
  </head>
  <body>
      <div class="container">
          
          <div class="col-md-4"></div>
          <div class="col-md-4">
              
              
              <div class="header" id="header">
                  <h3> Password Reset </h3>
              </div>
              
              <?php
              include ("process_reset.php");
              ?>
              
              
              <div id="login">
                  
                  <form method="POST" action="reset.php">
                       <div class="form-group">
                          <input type="text" class="form-control" name="Account_name" placeholder="Email or Phone" required>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" name="new_password" placeholder="New Password" required>
                      </div>
                      
                       <div class="form-group">
                           <input type="password" class="form-control" name="confirm_password" placeholder=" Confirm Password" required>
                      </div>
              
                       <button type="submit" class="btn btn-primary">Reset</button>
                       
                  </form> 
              </div>
              
              <div id="footer">
                  <h6>Developed by MR-JAF</h6>
              </div>
              
              
              
              
             
          </div>
          
          
          
          
           <div class="col-md-4"></div>
          
          
          
          
          
          
          
          
          
          
          
          
       
          
          
      </div>
      
      
      
      
      
      
      
      
      
      
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>