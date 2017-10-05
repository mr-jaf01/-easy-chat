<?php
include ("database/connect_db.php");

$post = $_POST['post'];
$date = date(Y-m-d);

if($post != ""){
    
    $Post_query = "INSERT INTO post(post_msg, post_date) VALUES('$post','$date')";
    
    $run_post = mysql_query($Post_query);
    
    
}else{
    
    echo 'you have to enter something to post...';
}


?>
