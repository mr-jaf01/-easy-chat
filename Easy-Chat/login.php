<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 session_start();   



?>
<html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy-Chat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style1.css" rel="stylesheet" type="text/css">

   
  </head>
  
  <body>
      <div class="container">
          
          <div class="col-md-4"></div>
          <div class="col-md-4">
              
              
              <div class="header" id="header">
                  <h3> Login </h3>
              </div>
              
              <?php
              include("processlogin.php");
              ?>
             
              
              <div id="login">
                  
                  <form method="POST" action="login.php">
                      <div class="form-group">
                          <input type="text" class="form-control" name="username" placeholder="Email or phone">
                      </div>
                      
                       <div class="form-group">
                           <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
              
                       <button type="submit" class="btn btn-primary">Login</button>
                       
                       <div id="new"> <a href="index.php">Create New Account</a></div>
                       <div id="reset"> <a href="reset.php">Forgotten Password ?</a></div>
              
              
              
                  </form> 
              </div>
              
              <div id="footer">
                  <h6>Developed by MR-JAF</h6>
              </div>
              
              
              
              
             
          </div>
          
          
          
          
           <div class="col-md-4"></div>
          
          
          
          
          
          
          
          
          
          
          
          
       
          
          
      </div>
  </body>      
</html>