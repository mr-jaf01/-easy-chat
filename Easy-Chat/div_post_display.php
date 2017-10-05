  <?php  
                     include("function/url.php");      
                            $allpost =mysql_query("SELECT * FROM post WHERE Post_sender = '".$_SESSION['username']."' ORDER BY post_id DESC ");
                            while ($dpos = mysql_fetch_assoc($allpost)){
                                
                                $postbd = $dpos['Post_msg'];
                                $post_date = $dpos['post_date'];
                                $sender_name = $dpos['Post_sender'];
                                $user_name3 = $dpos['User_name'];
                             
         echo '<div id="post_container" style="background-color:#F3F6F9; padding-left:5px; padding-right:5px;padding-bottom:5px;">';
         echo'<h3>'.'<a href="profile_page.php?=$_SESSSION["username"]>'.$user_name3.'</a>'.'</h3>';
         echo' <div id="post_body" style="">';
         echo url($postbd);
         echo' <div id="post_footer" style="margin-top: 10px;">'.'Date '.$post_date.'</div>';
         echo'</div>';
         
         echo' </div>';
         
        
         
         
                            }
               
                      ?>
                      
