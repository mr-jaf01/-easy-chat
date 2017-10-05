<?php
 function url($text){
     
     $text = html_entity_decode($text);
     $text = "".$text;
     $text = preg_replace('/(https{0,1}:\/\/[\w\-\.\/#?&=]*)/', '<a href="$1" target="_blank">$1</a>',$text);
     return $text;
 }
?>



