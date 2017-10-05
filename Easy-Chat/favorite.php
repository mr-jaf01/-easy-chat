<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "Access Denied";
    exit();
}  else {
    




include("database/connect_db.php");

$fetch =mysql_query("SELECT * FROM favorite WHERE person_added = '".$_SESSION['username']."'");

while ($row = mysql_fetch_assoc($fetch)){
    
    $person_to_be_added = $row['person_to_be_added'];
    $person_to_be_added_pic = $row['person_to_be_added_pic'];
    
    $img = "images/".$person_to_be_added_pic;
   ?>
       
<div style="height: 100px; width: 310px; padding: 2px; background-color: cornsilk; border: 1px solid black">
    
    <div style="position: absolute; left: 80px">
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
 

}



?>