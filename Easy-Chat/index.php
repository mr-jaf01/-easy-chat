<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy-Chat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
   

   
  </head>
  <body>
      <div class="container-fluid">
          
      <?php
       include("header.php");
      
      ?>
          <?php
//include("database/connect_db.php");
//$user_profile = $_GET['User_profile'];
//$query = "SELECT * FROM register WHERE User_name='$user_profile'";
 //$run_query = mysql_query($query);
//while($data = mysql_fetch_assoc($run_query)){ 
  // $name = $data['fname'];
   //$sname = $data['sname'];
   //$pro_pic = $data['profile_pic'];
//}
?>
          
          
         
              
        <?php
        
        include("main.php");  
        
        ?>
              
              
 
    
              
          </div>      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>