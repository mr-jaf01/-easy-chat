<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>garkuwa's chat room</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
   
  </head>
  <body>
      <div class="container-fluid">
          <?php 
                include ('database/connect_db.php');
                 session_start();
                  if(!isset($_SESSION['username'])){
                    echo 'Access Denied';
                    exit();
                }else{
                    
                    $query1 = "SELECT * FROM register WHERE email = '".$_SESSION['username']."'";
                       
                       $run1 = mysql_query($query1);
                       
                       while($row1 = mysql_fetch_assoc($run1)){
                           
                           $sen = $row1['fname'];
                           $sname = $row1['sname'];
                           $email = $row1['email'];
                           $pass = $row1['password'];
                           $age = $row1['age'];
                           $gender = $row1['gender'];
                           $live = $row1['Live_in'];
                           $attended = $row1['Attended']; 
                           $good_say = $row1['good_say'];
                           $profile_pic = $row1['profile_pic'];
                           
                           
                         
                       }
                    
          ?>
          <div class="row">
              <div class="header"></div>
              
                       
                  <div id="nav">
           
                  <nav>
                       
                     <ul>  
                         <li class=""><a href="feed.php"><h4>Home</h4></a></li>
                         <li class=""><a href="#"><h4>Friends</h4></a></li>
                         <li class=""><a href="profile_page.php?=$_SESSSION['username']"><h4><?php echo $sen.' Profile'; } ?></h4></a></li>
                         <li class=""><a href="logout.php"><h4>Logout</h4></a></li>
                     </ul>
                      
                  </nav>
                
                  </div>
               
               
              
              
              <div class="col-md-1" ></div>
              <div class="col-md-8" >
                  <h3>Edit Your Profile Settings Below</h3>
                  
                   <div id="profile_pic">
                       <h5>Edit Your Profile Picture</h5>
                       
         <?php    
  if(isset($_FILES['pic']['name'])){
      
                        $mypass = $_FILES['pic']['name'];
                        $mytemp = $_FILES['pic']['tmp_name'];
                        $mytype = $_FILES['pic']['type'];
	 
      if(($mytype = "image/jpeg") || ($mytype == "image/png") || ($mytype == "image/jpg") ){
	
                        move_uploaded_file($mytemp,"images/$mypass");
                        mysql_query("UPDATE `chat`.`register` SET `profile_pic` = '".$mypass."' WHERE `register`.`email` ='".$_SESSION['username']."'");
                       
       }else{
                        echo"the file type must be jpeg or png or jpg";
            }
               
           
  }else{
      
  }
          
   $display_pic = 'images/'.$profile_pic;
              
       
            
            
                       ?>
                       
           <img src="<?php echo $display_pic ?>" alt="" width="167" height="190" class="img-circle">
                     
                      
                      <div class="form-group" id="upload_pic_btn">
                          <form method="POST" action="account_setting.php" enctype="multiPart/form-data">
                          <input type="file" name="pic">
                          <button type="submit" class="btn btn-primary" name="upd">Update Profile Picture</button>
                      </form>
                      </div>
                           
                   </div>
                  
                  
                  
                  <div id="password_settings">
                      <?php
                      if(isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['c_new_password'])){
                            $old_password = md5($_POST['old_password']);
                            $new_password = md5($_POST['new_password']);
                            $c_new_password = md5($_POST['c_new_password']);
                      
                          if($old_password == $pass && $new_password == $c_new_password){
                              $query = "UPDATE `chat`.`register` SET `password` = '".$new_password."' WHERE `register`.`email` ='".$_SESSION['username']."'";
                              mysql_query($query);
                              echo 'Password Change successfully';
                            
                          }else{
                              echo 'Your old password is Inccorrect';
                          }
                            
                      }else{
                 
                      }
                      ?>
                      <h3>Password Settings</h3>
                       <p>Change Password</p>
                       <form method="POST" action="account_setting.php">
                     
                       <div class="form-group">
                          <input type="password" class="form-control" name="old_password" placeholder="Old password" required>
                      </div>
                       <div class="form-group">
                          <input type="password" class="form-control" name="new_password" placeholder="New Password" required>
                      </div>
                          
                       <div class="form-group">
                          <input type="password" class="form-control" name="c_new_password" placeholder="Confirm New Password" required>
                      </div>
                         
                           <button type="submit" class="btn btn-primary">Change Password</button>
                          
                      
                  </form>
                  </div>
                  
                  
                  
                  
 <div id="P_info">
     
     <h3> Update Personal Info</h3>
                      
     <form method="POST" action="account_setting.php">
     
    <div class="form-group">
        <input type="text" class="form-control" name="fname" placeholder="Firstname" required>
    </div>
                      
    <div class="form-group">
        <input type="text" class="form-control" name="sname" placeholder="Surame" required>
    </div> 
     
     <div class="form-group">
        <input type="text" class="form-control" name="age" placeholder="Age" required>
    </div> 
     
     <div class="form-group">
        <input type="text" class="form-control" name="address" placeholder=" Address" required>
    </div> 
     
     <div class="form-group">
        <input type="text" class="form-control" name="State" placeholder="State" required>
    </div> 
     
     <div class="form-group">
        <input type="text" class="form-control" name="city" placeholder="City" required>
    </div> 
     
    
     
     <h4>Good Say</h4>
     <textarea name="good_say" placeholder="write Here"></textarea>
     
     
     <br>
     <br>
     
     
     <button type="submit" class="btn btn-primary">Save and Update</button>
                   
 </form>    
</div>
                  
                  
                  
              <div id="account_details">
              <?php 
                  
                 //$user_name = $_POST['user_name'];
                 // $new_email = $_POST['new_email'];
                  //$C_new_email = $_POST['confirm_email'];
                    
                 // if($old_email == $email && $new_email == $C_new_email){
                  // $query2 = "UPDATE `chat`.`register` SET `user_name` = '".$user_name."' WHERE `register`.`email` ='".$_SESSION['username']."'";
                   // mysql_query($query2);
                    //echo 'User Create Successfully';
                  // }else{
                     // echo 'Your old Email is Incorrect';
                 // }
                  
                  
                  
                  ?>
                  
                  <h3> Update Account Details</h3>
                  <form method="POST" action="#">
                      
                   <div class="form-group">
                       <input type="text" class="form-control" name="user_name" placeholder="Create Username" required>
                   </div>
                      
               
                  <button type="submit" class="btn btn-primary">Save and Update</button>    
                      
                      
                      
                  </form>   
              </div>
                  
                  
                  
                
              </div>
              <div class="col-md-3" ></div>
     
          
              
              
              
              
         
              
       
              
 
    
          </div>   
          </div>      
      <script src="poss/js/send_post.js" type="text/javascript"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>