$(window).ready(function(){
   var size = window.innerWidth;
   
 
   
   if(size < 993){
       
       $('#right_feed').hide();
      // $('#left_feed').hide();
       $('#new_view_profile').css('margin-left','0px').css('margin-right','0px');
       
   }else{
       $('#right_feed').show();
       //$('#left_feed').show();
       $('#down').hide();
   }
});