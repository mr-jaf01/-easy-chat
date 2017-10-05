<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link href="css/post_style.css" rel="stylesheet" type="text/css">
    <link href="css/footer_style.css" rel="stylesheet" type="text/css">
    

   
  </head>
 
  <body style="background-color:white; padding:0px; margin: 0px;">
      <div class="container-fluid">
          <?php
          
             //#ece0e0;
          
            include ('function/chat_function.php'); 
            
   
                  session_start();
                  if(!isset($_SESSION['username'])){
                      
                      echo 'Access denied';
                      exit();
                      
                  }else{
                      
                      $query1 = "SELECT fname,User_name FROM register WHERE email = '".$_SESSION['username']."'";
                       
                       $run1 = mysql_query($query1);
                       
                       while($row1 = mysql_fetch_assoc($run1)){
                           
                           $sen = $row1['fname'];
                            $user_name = $row1['User_name'];
                            
                           
                         
                       }
                  }
          
          ?>
          
          <div class="row">
              <div class="header" style="height: auto; padding-left: 0px; ">
                   <nav>
                      <ul>
                          <li><a href="feed.php" style="color:white"><h4>Home</h4></a></li>
                          <li><a href="favorite.php" style="color:white "><h4>Favorite</h4></a></li>
                          <li><a href="profile_page.php" style="color:white "><h4>My Profile</h4></a></li>
                          <li><a href="profile_page.php" style="color:white"><h4>Message</h4></a></li>
                          <li><a href="profile_page.php" style="color:white"><h4>Notification</h4></a></li>
                          <li><a href="logout.php" style="color:red "><h4>Logout</h4></a></li>
                      </ul>
                      
                  </nav>
                  
              </div>
              
              <div class="col-md-3"  id="left_feed" style="">
                  <h4><strong>Favorite List</strong></h4>
                  <?php
                  $fetch =mysql_query("SELECT * FROM favorite WHERE person_added = '".$_SESSION['username']."'");

while ($row = mysql_fetch_assoc($fetch)){
    
    $person_to_be_added = $row['person_to_be_added'];
    $person_to_be_added_pic = $row['person_to_be_added_pic'];
    
    $img = "images/".$person_to_be_added_pic;
   ?>
       
<div style="height:120px; width: 310px; padding-left:0px; background-color: #f7f4f4; margin:10px; border: 1px solid grey">
    
    <div style="position: absolute; left: 80px; padding-left: 20px;">
        <?php echo '<a href="otherprofile.php?User_profile='.$person_to_be_added.'">'.$person_to_be_added.'</a>'?>
        <br><span>Abdullahi musa</span><br>
        <span><strong>Attended</strong> Federal Polytechic Bauchi</span><br>
        <span><strong>Live in</strong> Toro LGA Bauchi</span><br>
        <span><strong>Country</strong> Nigeria</span>
    </div>
    
    
        
   
    
    <div style="position: absolute; border: 1px solid black; height: 60px; width: 60px;">
        <img src="<?php  echo $img; ?>" width="60" height="60">
    </div>
    
</div> 
       
       
       
       <?php 
}

?>
 
              </div>
              <div class="col-md-5"  id="middle_feed">
                 
                  <div class="frm" id="frm">
                      
                      <?php 
                      include("post.php");  
                      
                      
                      // retriving post id from post table to make condition for inserting comments
                      
                       $allpost =mysql_query("SELECT post_id FROM post ");
                            while ($dpos = mysql_fetch_assoc($allpost)){
                                $id = $dpos['post_id'];
                                
                            }
                      
                      ?>
                       
                      
                      
                      <div id="photo" style="margin-top:5px; margin-bottom: 5px;">
                          <form action="" method="Post">
                              <input type="submit" name="" value="Share Photo">
                           </form>
                           </div>
                      <form method="POST"  action="feed.php">
                          
                      <div class="form-group" id="Fname">
                          <input type="text" name="post" class="form-control" placeholder="Write Post Here">
                      </div>&nbsp;&nbsp;
                          
                          
                          <button type="submit" class="btn btn-primary" name="send">POST</button>                    
                      </form>
                      </div>
                  
                    <?php  
                     
                    include("function/url.php");
                            $allpost =mysql_query("SELECT * FROM post ORDER BY post_id DESC ");
                            while($dpos = mysql_fetch_assoc($allpost)){
                                $id = $dpos['post_id'];
                                $postbd = $dpos['Post_msg'];
                                $post_date = $dpos['post_date'];
                                $sender_name = $dpos['Post_sender'];
                                $user_name3 = $dpos['User_name'];
                             
        
                       ?>
                           
              <div id="post_style">
          
                          <div id="tittle"><?php  echo '<a href="otherprofile.php?User_profile='.$user_name3.'"><h4>'.$user_name3.'</h4></a>'  ?></div>
                          <div id="content"><?php  echo url($postbd); ?></div>
                    <div id="bottom">
                       
                        
                     <ul>
                         <li><a class="comment">Comment</a></li>
                         <li><a id="like">Like</a></li>
                         <li><a id="share">Share</a></li>
                  
                     </ul>
                   </div>
                          <div class="comment_display" style="width: 250px;">
                              <?php 
                              if(isset($_POST['cmt'])){
                                  
                                  $get_comment = $_POST['cmt'];
                                  
                                  echo $get_comment;
                                  
                              }
                              
                              ?>
                              <form action="" method="POST">
                                  <div class="form-group">
                                      <input type="text" name="cmt" class="form-control" placeholder="Write Comment">
                                  </div>
                              </form>
                          </div>
  
                 </div>
                           
                           
                           
                           
                        <?php         
                                
                               
                                
                                
                                
                            }
                            
                            //inserting comment to db

                            
               
                      ?>
                      
                 
                  <div id="more_post">
              <form action="" method="POST">
                  <div class="form-group">
                      <button name="" class="btn btn-primary">See More Post</button>
                  </div>
              </form>
          </div>
                  
              </div>
              
              <div class="col-md-3" style="" id="right_feed">
                  
                     
                  
              </div>
              
              
          
          


    
    
    
    
    
    
    </div>
          
      <footer>
          <div id="down">
              <h3>PROFILE</h3>
                      
                    <?php
                        include ("profile.php");
                        
                  
                    ?>
                 
                  
                  <a href="logout.php" style="color: red"><h4> Logout </h4></a>
              
          </div>
      </footer>
    </div>  
      <script src="scripts/js/jquery.js"></script>
      <script src="scripts/js/comment.js"></script>
      
      
  </body>
</html>