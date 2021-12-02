var $encargadoMsg = $('.encargadoMsg'),
  $encargado = $('.encargado'),
  $clienteMsg = $('.clienteMsg'),
  $cliente = $('.cliente'),
  $frontbox = $('.frontbox');

$('#switch1').on('click', function() {
  $encargadoMsg.toggleClass("visibility");
  $frontbox.addClass("moving");
  $clienteMsg.toggleClass("visibility");

  $cliente.toggleClass('hide');
  $encargado.toggleClass('hide');
})

$('#switch2').on('click', function() {
  $encargadoMsg.toggleClass("visibility");
  $frontbox.removeClass("moving");
  $clienteMsg.toggleClass("visibility");

  $cliente.toggleClass('hide');
  $encargado.toggleClass('hide');
})

var passwordCliente = document.querySelector('.cpassword');
var passwordSignup = document.querySelector('.password');
var passwordConfirm = document.querySelector('.confirmpassword');
var show = document.querySelector('.show');
var hide = document.querySelector('.hide');
var show1 = document.querySelector('.show1');
var hide1 = document.querySelector('.hide1');

show.onclick = function(){
  passwordSignup.setAttribute("type","text");
  show.style.display = "none";
  hide.style.display = "block";
}

hide.onclick = function(){
  passwordSignup.setAttribute("type","password");
  hide.style.display = "none";
  show.style.display = "block";
}

show1.onclick = function(){
  passwordCliente.setAttribute("type","text");
  show1.style.display = "none";
  hide1.style.display = "block";
}

hide1.onclick = function(){
  passwordCliente.setAttribute("type","password");
  hide1.style.display = "none";
  show1.style.display = "block";
}

