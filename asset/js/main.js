$('.datepicker').datepicker({
	autoclose: true,
	todayHighlight: true
});

var availableTags = [
	"Aceh",
	"Medan",
	"Padang",
	"Palembang",
	"Bengkulu",
	"Lampung",
	"Jakarta",
	"Bandung",
	"Yogyakarta",
	"Solo",
	"Semaarang",
	"Surabaya",
	"Madura",
	"Timor Timur",
	"Bali",
	"Lombok",
	"Pontianak",
	"Flores",
	"Balikpapan",
	"Makasar",
	"Maluku",
	"Jayapura"
];
$( ".autocomplete" ).autocomplete({
	source: availableTags
});

function search(){
	document.getElementById("hide").style.display="block";
};

function profile(){
	$('#pro').addClass('cur');
	$('#cre').removeClass('cur');
	$('#neq').removeClass('cur');
	$('#his').removeClass('cur');
	$('#pas').removeClass('cur');
	document.getElementById("profile").style.display="block";
	document.getElementById("history").style.display="none";
	document.getElementById("credit").style.display="none";
	document.getElementById("nequi").style.display="none";
	document.getElementById("pass").style.display="none";
}

function reservas(){
	$('#his').addClass('cur');
	$('#cre').removeClass('cur');
	$('#pro').removeClass('cur');
	$('#neq').removeClass('cur');
	$('#pas').removeClass('cur');
	document.getElementById("profile").style.display="none";
	document.getElementById("history").style.display="block";
	document.getElementById("credit").style.display="none";
	document.getElementById("nequi").style.display="none";
	document.getElementById("pass").style.display="none";
}

function credit(){
	$('#cre').addClass('cur');
	$('#his').removeClass('cur');
	$('#pro').removeClass('cur');
	$('#neq').removeClass('cur');
	$('#pas').removeClass('cur');
	document.getElementById("profile").style.display="none";
	document.getElementById("history").style.display="none";
	document.getElementById("credit").style.display="block";
	document.getElementById("nequi").style.display="none";
	document.getElementById("pass").style.display="none";
}

function nequi(){
	$('#neq').addClass('cur');
	$('#cre').removeClass('cur');
	$('#pro').removeClass('cur');
	$('#his').removeClass('cur');
	$('#pas').removeClass('cur');
	document.getElementById("profile").style.display="none";
	document.getElementById("history").style.display="none";
	document.getElementById("credit").style.display="none";
	document.getElementById("nequi").style.display="block";
	document.getElementById("pass").style.display="none";
}

function pass(){
	$('#pas').addClass('cur');
	$('#cre').removeClass('cur');
	$('#pro').removeClass('cur');
	$('#neq').removeClass('cur');
	$('#his').removeClass('cur');
	document.getElementById("profile").style.display="none";
	document.getElementById("history").style.display="none";
	document.getElementById("credit").style.display="none";
	document.getElementById("nequi").style.display="none";
	document.getElementById("pass").style.display="block";
}

/* expand collapse module */
$('aside .tiles-white.titled .head').click(function(){
	$(this).parent().toggleClass('collapsed');	
});


//checkbox style
function checkInput($this_input){
	var name = $this_input.children('input').attr('name');
	if($this_input.children('input').prop('checked')){
		if($this_input.children('input').attr("type") == 'radio'){
			$('input[name='+name+']').parent().removeClass('checked')	
		}
		$this_input.addClass('checked');
	}else{
		$this_input.removeClass('checked')
	}	
}

$('.checkbox, .radio, .bookmark').click(function(){
	checkInput($(this));
});

//tooltip
$('[data-toggle="tooltip"]').tooltip();

//tab-panel
$('.tab-panel > ul li a').click(function(){
	$('.tab-panel > ul li a').removeClass('cur');	
	$(this).addClass('cur');
	var target = $(this).data('href');
	$('.overview > .panel').hide();
	$(target).show();

});

//quick promo
$('.quick-drop').click(function(){
	$('.promo .container').fadeToggle();	
	$(this).toggleClass('cur');
	$('.banner .search').toggle();
});


//mobile menu
$('.mini-header .menu').click(function(){
	$('#header').addClass('cur');	
});

$('.main-header > span').click(function(){
	$('#header').removeClass('cur');	
});

//login popup
$("#login_btn").colorbox({inline:true, href:"#login-block"});

$(document).ready(function () {
	enquire.register("screen and (max-width: 768px)", function() {
		$('.step-content aside .tiles-white .head').parent().addClass('collapsed');
	});
});