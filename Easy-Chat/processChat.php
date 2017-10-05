<?php
  

               
                  if(isset($_POST['send'])){
                     if (send($sen, $_POST['message'])){
                         
                         echo'Message Sent';
                         
                     }else{
                         
                        echo'Message not Sent';
                     }
                      
                  }
                  
?>
                  