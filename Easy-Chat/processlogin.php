<?php
      
        if($_POST){

             $_SESSION['username'] = $_POST['username'];
             $_SESSION['password'] = md5($_POST['password']);

             if(isset($_SESSION['username']) && isset($_SESSION['password'])){
              
            
              include('database/connect_db.php');
              
             $query = "SELECT email,password FROM register WHERE email='".$_SESSION['username']."'";
             $run =  mysql_query($query);
             $num =  mysql_num_rows($run);
             
             if($num != 0){
              
              while($row = mysql_fetch_assoc($run)){
                  
                  $user = $row['email'];
                  $pass = $row['password'];
                
              }// end of while for retrive
              
               if($_SESSION['username'] == $user){
                  if($_SESSION['password'] == $pass){
                      
                      //its take you to de chat page
                      
                      header('location:feed.php');
                      
                      
                      
                  }else{
                      echo' Your password is incorrect';
                  }
                  
                  
                  
              }else{
                  echo 'Your username is incorrect';
              }
                
              
              
              
              
              
              
          }else{
              echo '<h5>You have to Enter Your User and Password</h5>';
          }
          
          
          
          }
          
                  
        }
           
          
?>
          