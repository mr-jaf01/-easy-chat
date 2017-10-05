<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style1.css" rel="stylesheet" type="text/css">

   
  </head>
    <body>
         <div class="row">
             <div class="col-md-7" id="images">
             <!--<img src="images/Gfamily.jpg" class="img-responsive"> -->
             </div>
              <div class="col-md-5">
              
                  <h1>Create a new account</h1>
                  <h4>It's free and always will be!!</h4>
                  <div class="frm">
                      <form method="POST" action="register.php">
                      <div class="form-group" id="Fname">
                          <input type="text" class="form-control" name="fname" onkeyup="letteronly(this)" placeholder="Firstname" required>
                      </div>
                      
                      <div class="form-group" id="Sname">
                          <input type="text" class="form-control" name="sname" onkeyup="letteronly(this)" placeholder="Surname" required>
                      </div>
                      
                       <div class="form-group">
                           <input type="text" class="form-control" name="email"  placeholder="Email or Phone" required>
                      </div>
                       <div class="form-group">
                       <input type="text" class="form-control" name="user_name" placeholder="Create Username" required>
                       </div> 
                          
                      <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="New Password" required>
                      </div>
                          
                       <div class="form-group">
                          <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                      </div>
                          
                      <div class="form-group">
                           <input type="text" class="form-control" name="age" placeholder="Age" required>
                      </div>
                   
                      
                       <div class="form-group">
                           <input type="text" class="form-control" name="gender"onkeyup="letteronly(this)" placeholder="Gender" required>
                        </div>
                     
                      
                      <div id="term">
                        <h6>By clicking Create Account,
                            you agree to our Terms and 
                            confirm that you have read 
                            our Data Policy, including 
                            our Cookie Use Policy. 
                            You may receive SMS message 
                            notifications from Easy-Chat and 
                            can opt out at any time.</h6>
                      </div>
                      <br>
                      <br>
              
                      <button type="submit" class="btn btn-primary">Create Account</button>
                      
                  </form>
                  </div>
              </div>
              
              
         </div>
              
              
              
        <script src="js/main.js" type="text/javascript"></script>         
    </body>
</html>
