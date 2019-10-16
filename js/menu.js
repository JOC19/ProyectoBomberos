$(document).ready(menu);

var contador = 1;

function menu () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('.HeaderNav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.HeaderNav').animate({
				left: '-100%'
			});
		}
	});

	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}