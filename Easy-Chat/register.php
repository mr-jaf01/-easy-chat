<?php
if(isset($_POST['fname']) && isset($_POST['sname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['user_name'])){
    
   $fname = $_POST['fname']; 
   $sname = $_POST['sname'];
   $email = $_POST['email'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $username = $_POST['user_name'];
    
   
   include ('database/connect_db.php');
   if($pass == $cpass){
       //if ($sname == "Garkuwa"){
   
  $query = "INSERT INTO register(fname,sname,email,password,age,gender,User_name) VALUES('$fname','$sname','$email','$pass','$age','$gender','$username')";
 
  mysql_query($query);
  
  $register = mysql_affected_rows();
  
    if( $register = mysql_affected_rows()){
        
        echo 'Account Created Successfully';
        header('Refresh:3; url=login.php');
        
    }else{
        
        echo 'Unable To Create Account...Please Try Again';
        
    }
  
   
//}else{
    
   // echo 'The Surname field must be Garkuwa';
    
}
   }  else {
       echo 'Password mismatch';
   }







?>