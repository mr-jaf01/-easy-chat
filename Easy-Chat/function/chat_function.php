<?php
include ('connect_db.php');


function getmessage(){
    $query = "SELECT  sender,message FROM chat ORDER BY msg_id ASC";
    $run = mysql_query($query);
    
    $messages = array();
    
    while ($row = mysql_fetch_assoc($run)){
         $messages[] = array(
             'sender'=>$row['sender'],
             'message'=>$row['message']
         );
        
        
    }
    
    
    return $messages;
    
}



function send($sender , $message){
    
   if(!empty($sender) && !empty($message)){
       
       $sender = mysql_real_escape_string($sender);
       $message = mysql_real_escape_string($message);
       
       $query = "INSERT INTO chat(sender,message) VALUES('$sender','$message')";
       
   if($run = mysql_query($query)){
       
       return TRUE;
       
   }else{
       return FALSE;
       
   }
       
       
       
   }else{
       return false;
   }
    
    
    
}



?>

