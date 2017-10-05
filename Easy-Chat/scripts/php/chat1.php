<?php

require("../../database/connect_db.php");
require("../../function/chat_function.php");


    $messages = getmessage();
                        foreach ($messages as $message){
                         echo '<strong>'.$message['sender'].'<br>'.'send </strong><br>';
                        echo $message['message'].'<br><br>';
                      
                      }


?>