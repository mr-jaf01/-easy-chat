 <?php
                  
                  $qry = "SELECT * FROM register WHERE email = '".$_SESSION['username']."' ";
                  $runqury = mysql_query($qry);
                  
                  while ($rw = mysql_fetch_assoc($runqury)){
                      
                      $fname = $rw['fname'];
                      $sname = $rw['sname'];
                      $email = $rw['email'];
                      $gender = $rw['gender'];
                      
                      echo '<table class="table">';
                                
                                
        echo '<thead>';
                                
                                
        echo '</thead>';
                                
                                
        echo '<tbody>';
                                
        echo '<tr>'.'<td>'.'<h5>FirstName:</h5>'.'</td>'.'<td>'.$fname.'</td>'.'</tr>';                       
	echo '<tr>'.'<td>'.'<h5>Surname:</h5>'.'</td>'.'<td>'.$sname.'</td>'.'</tr>';
	echo '<tr>'.'<td>'.'<h5>Email :</h5>'.'</td>'.'<td>'.$email.'</td>'.'</tr>';
        echo '<tr>'.'<td>'.'<h5>Gender :</h5>'.'</td>'.'<td>'.$gender.'</td>'.'</tr>';
							
	echo '</tbody>';
                                
	echo '</table>';
                
                  }
   
                  ?>