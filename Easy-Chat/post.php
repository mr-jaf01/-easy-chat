<?php
if(isset($_POST['post'])){
    
$post = $_POST['post'];
$date = date('Y-m-d');
$sender = $_SESSION['username'];
$user_name2 = $user_name;

if($post != ""){
    
    include ("database/connect_db.php");
    mysql_query("INSERT INTO post(post_msg,post_date,Post_sender,User_name)  VALUES('$post','$date','$sender','$user_name2')");
    
    echo "Status Update Successfully";
    
    
}  else {
    
    echo" you have type somthing to post";
    
    
}

}


?>