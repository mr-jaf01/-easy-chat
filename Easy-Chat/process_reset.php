<?php
 
             if(isset($_POST['Account_name']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])){
                 
                 $Acc_Name = $_POST['Account_name'];
                 $new_password = md5($_POST['new_password']);
                 $confirm_password = md5($_POST['confirm_password']);
                 
                 include('database/connect_db.php');
                 $query = "SELECT email FROM register WHERE email = '".$Acc_Name."'";
                 
                 $run = mysql_query($query);
                 
                 while($row = mysql_fetch_assoc($run)){
                     
                  
                     $email = $row['email'];
                     
                 }
                 
                     
              
              if(@$Acc_Name == $email){
                  
                  if($new_password == $confirm_password){
                      
                      
                      $query1 = "UPDATE `chat`.`register` SET `password` = '".$new_password."' WHERE `register`.`email` ='".$Acc_Name."'";
                      
                      $run1 = mysql_query($query1);
                      
                      if($run1 = mysql_query($query1)){
                          
                          echo 'Password Reset Successfully';
                          header("Refresh:3; url=login.php");
                      }else{
                          echo "Unable to Reset Password Please Try Again...";
                      }
                      
                      
                      
                      
                  }else{
                      
                      echo 'Password Mis match';
                  }
                  
                  
                  
              }else{
                  
                  echo 'Your Account is not Recognize ';
              }  
                 
                 
                 
                 
                 
                 
             }else{
                 
                 
                 
             }
             
             
           
?>
             