<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>chat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <link href="css/nav.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      
      <div class="container-fluid">
          <?php
          
            include ('function/chat_function.php'); 
            
   
                  session_start();
                  if(!isset($_SESSION['username'])){
                      
                      echo 'Access denied';
                      exit();
                      
                  }else{
                      
                       $query1 = "SELECT fname FROM register WHERE email = '".$_SESSION['username']."'";
                       
                       $run1 = mysql_query($query1);
                       
                       while($row1 = mysql_fetch_assoc($run1)){
                           
                           $sen = $row1['fname'];
                           
                         
                       }
          
          ?>
          
          <div class="row">
              <div class="header" id="header1">
                 
                  <div class="session">
                      <?php
                           echo '<h3>'.$sen.'</h3>';
                      ?>
                  
                  </div>
                  
              </div>
              
              
              
              <div class="col-md-3">
                  
                  <nav>
                  <ul>
                          <li>     
                              <a href="feed.php"><h4>Home</h4></a>
                          </li>
                      
                      
                      <li>     
                             <a href="logout.php"><h4> Logout </h4></a>
                      </li>
                      
                  </ul>
                  </nav>
                  
              </div>
              
              
              <div class="col-md-6" style="height:700px; ">
                  
                  <?php
                  include ("processChat.php");
                  ?>
                 
                  
                  <div id="display" class="container" style=" height: 500px; width:auto;">
                      
                     
                      
                      
                      
                      
                  </div>
                                
                  <div id="input">
                      <div id="feedback"></div>
                      
                      <form method="POST" action="chat.php" id="form_input">
                          
                      <div class="form-group" id="message">
                          <input type="text" class="form-control" name="message" placeholder="Message Here" id="message2">
                      </div>
                      
               
                      
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="send" id="send">Send</button>
                      </div>
                      
                  </form>
                  </div>
              </div>
              
              <div class="col-md-3">
                  
                  <h3>PROFILE</h3>
                      
                    <?php
                        include ("profile.php");
                        
                  }
                    ?>
                 
                  
                  <a href="logout.php" style="color: red"><h4> Logout </h4></a>
                  </div>
    

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </div>
      </div>
      
    
      <script type="text/javascript" src="scripts/js/jquery.js"></script>
      <script type="text/javascript" src="scripts/js/auto_chat.js"></script>
      
      
  </body>
</html>