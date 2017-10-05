function letteronly(input){
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex,""); 
}

function div_show(){
    document.getElementById('frm').style.display="block";
}


$(document).ready(function() {
    $('#myform').submit(function() {
        window.open('', 'formpopup', 'width=400,height=400,resizeable,scrollbars');
        this.target = 'formpopup';
    });
});