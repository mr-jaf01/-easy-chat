<?php 
$user_profile = $_GET['User_profile'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link href="css/post_style.css" rel="stylesheet">
  </head>
  <body>
         <?php
include ('database/connect_db.php');
session_start();
if(!isset($_SESSION['username'])){
    echo 'Access Denaid...';
    exit();
}else{
    $query1 = "SELECT * FROM register WHERE User_name='$user_profile'";
                       
                       $run1 = mysql_query($query1);
                       
                       while($row1 = mysql_fetch_assoc($run1)){
                           
                           $fname = $row1['fname'];
                           $sname = $row1['sname'];
                           $user_name = $row1['User_name'];
                           $profile_pic = $row1['profile_pic'];
                           $live_in = $row1['Live_in'];
                           $attended = $row1['Attended'];
                         
                       }

?>
              
      <div id="new_view_profile" class="container-fluid">
          
              <div class="row">
                   <div class="header"></div>
                  
                  <div id="left" class="col-md-9">
                      <div id="profile_bar">
                          <h4><strong><?php echo $user_name; ?></strong></h4>
                          
                         
                          
                      </div>
                      <div id="left_inner">
                          <img src="icons/Easy chat.png" class="img-responsive"> 
                      </div>
                      
                      <div id="links">
                          <ul>
                              <li><form action="feed.php" method="post">
                                      <input type="submit" value="Feed">
                                  </form>
                              </li>
                              
                              <li><form action="" method="Post">
                                      <input type="submit"  name="add_to" value="Add To Favorite">
                                  </form>
                              </li>
                              <?php 
                              if(isset($_POST['add_to'])){
                                  
                                 
                                $check = mysql_query("SELECT * FROM favorite WHERE person_added = '".$_SESSION['username']."'");
                                while($check1 = mysql_fetch_assoc($check)){
                                    
                                    $person_added = $check1['person_added'];
                                    $person_to_be_added = $check1['person_to_be_added'];
                                    $person_to_be_added_pic = $check1['person_to_be_added_pic'];
                                    
                                }
                                
                                if(@$person_added == $_SESSION['username'] && $person_to_be_added == $user_profile && $person_to_be_added_pic == $profile_pic){
                                    
                                    echo 'User Already In The List';
                                    
                                }else{
                                    
                                    @$qry_addto_favorite= "INSERT INTO favorite(person_added,person_to_be_added,person_to_be_added_pic) VALUES('".$_SESSION['username']."','$user_profile', '$profile_pic')";
                                    if(@mysql_query($qry_addto_favorite)){
                                        echo 'user Added to The List';
                                    }else{
                                        echo"Unable to add to the list";
                                        
                                    }
                                    
                                }
                              }
                            
                                
                              ?>
                              
                              <li><form action="photo.php" method="post">
                                      <input type="submit" value="Photos">
                                  </form>
                              </li>
                              
                              <li><form action="message.php" method="post">
                                      <input type="submit" value="Send Message">
                                  </form>
                              </li>
                              
                          </ul>
                      </div>
                      
                     
                     
                      <div id="main_post">
                           <?php 
                          include("post.php");  
                           ?>
                          <h4><strong>Recent Post</strong></h4>
                           <div id='post_body'>
                            <?php   
                            include("function/url.php");
                            $allpost =mysql_query("SELECT * FROM post WHERE User_name ='$user_profile' ORDER BY post_id DESC ");
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
        
                           ?>
                           
                               
                               
                          </div>
                      </div>
                      
                  </div>
                   
                  
              <div id="right" class="col-md-3">
              <div id="right_">
                  <?php $display_pic = 'images/'.$profile_pic;?>
                  <div id="right_inner">
                      <img src="<?php echo $display_pic ?>"  id="pro_img"  class="img-circle" width="186" height="200">
                  </div>
                  
                  <div id="more_detail" style="background-color:#ebe4e4; padding-left: 5px;">
                      <strong>Name : </strong><span><?php echo $fname.' '.$sname; ?></span><br>
                      <strong>Attended : </strong><span><?php  echo $attended; ?></span><br>
                      <strong>Live in  :</strong> <span><?php  echo $live_in; ?></span>
                  </div>
                  
              </div>
                  
                   <div>
                     <br>
                  </div>
                  
                   <div>
                      <h4>Favorite List</h4>
                      <div id="favorite_list" style="border:2px solid #d0d0d0">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                          <img src="" width="30" height="30">
                      </div>
                  </div>
                  
                  
               </div>
              
              
              
              
              
          </div>
              
              
            
   
       </div>
      <script src="scripts/js/jquery.js"></script>
      <script src="scripts/js/comment.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php } ?>