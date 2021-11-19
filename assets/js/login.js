function openLoginInfo() {
  $(document).ready(function(){ 
    $('.b-form').css("opacity","0.01");
    $('.box-form').css("left","-37%");
    $('.box-info').css("right","-37%");
  });
}

function closeLoginInfo() {
  $(document).ready(function(){ 
    $('.b-form').css("opacity","1");
    $('.box-form').css("left","0px");
    $('.box-info').css("right","-5px"); 
  });
}

$(window).on('resize', function(){
    closeLoginInfo();
});

var passwordLog = document.querySelector('.pass');
var show = document.querySelector('.show');
var hide = document.querySelector('.hide');

show.onclick = function(){
  passwordLog.setAttribute("type","text");
  show.style.display = "none";
  hide.style.display = "block";
}

hide.onclick = function(){
  passwordLog.setAttribute("type","password");
  hide.style.display = "none";
  show.style.display = "block";
}