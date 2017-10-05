$(document).ready(function(){
    var interval = setInterval(function(){
        
        $.ajax({
            url:'scripts/php/chat1.php',
            success: function(data){
                $('#display').html(data);
            }
            
        });
        
    },1000);
});