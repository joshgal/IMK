function viewNilai() {
    var x = document.getElementById("divChart");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

$(function(){

$('#show').click(function(){

if($(this).hasClass('fa-eye-slash')){
   
  $(this).removeClass('fa-eye-slash');
  
  $(this).addClass('fa-eye');
  
    
}else{
 
  $(this).removeClass('fa-eye');
  
  $(this).addClass('fa-eye-slash');  
  
}
});
});