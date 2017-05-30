$(document).ready(function() {
	
	$("#news div:nth-child(n+5)").empty();
	
	$("img[src$='header.png']").wrap("<a href='/'></a>");
	
	$('body').prepend('<div id="fixMenu"><div class="container"><div class="row"><div class="col-md-8 col-sm-6">г. Йошкар-Ола, с. Семеновка, ул. Чернышевского д. 2;  ул. Молодежная, д. 12</div><div class="col-md-2 col-sm-2">8-8362-72-78-66</div><div class="col-md-2 col-sm-4"><a class="formFeedback">форма обратной связи</a></div></div></div></div>');
	
	$('body').prepend('<div id="paranja"><div id="window"></div></div>');
	$('#window').load('/js/form-ajax.html');
	
	$('.formFeedback').click(function(e) {
		e.preventDefault();
		$('#paranja, #window').slideDown(555);
	});
	
	$('.footer').prepend('<a class="footerLink" target="_blank" href="mailto:webmaster@muz-shkola.ru?subject=Вопрос по сайту">разработка сайта</a>');

	$('a[href$=".pdf"]').attr('target', '_blank');
	
});

window.onscroll = function () { 
	if ( window.pageYOffset > 100 ) {
		$('#fixMenu').slideDown();
		} else {
		$('#fixMenu').slideUp();
	}
};

