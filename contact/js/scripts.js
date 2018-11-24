<<<<<<< HEAD
wow = new WOW({
	animateClass: 'animated',
	offset: 100
});
wow.init();

	function first(){
		$('#content1').css('display', "block");
		$('#tab1').addClass('active-tab');
		$('#tab2, #tab3, #tab4').removeClass('active-tab');
		$('#content2, #content3, #content4').css('display', "none");
	};
	function second(){
		$('#content2').css('display', "block");
		$('#tab2').addClass('active-tab');
		$('#tab3, #tab4, #tab1').removeClass('active-tab');
		$('#content3, #content4, #content1').css('display', "none");
	};
	function third(){
		$('#content3').css('display', "block");
		$('#tab3').addClass('active-tab');
		$('#tab4, #tab1, #tab2').removeClass('active-tab');
		$('#content4, #content1, #content2').css('display', "none");
	};
	function fourth(){
		$('#content4').css('display', "block");
		$('#tab4').addClass('active-tab');
		$('#tab1, #tab2, #tab3').removeClass('active-tab');
		$('#content1, #content2, #content3').css('display', "none");
	};
	function nextTab(){
		if($('#tab1').hasClass('active-tab')){
			$('#tab2').addClass('active-tab');
			$('#content2').css('display', "block");
			$('#tab3, #tab4, #tab1').removeClass('active-tab');
			$('#content3, #content4, #content1').css('display', "none");
		}
		else if($('#tab2').hasClass('active-tab')){
			$('#tab3').addClass('active-tab');
			$('#content3').css('display', "block");
			$('#tab4, #tab1, #tab2').removeClass('active-tab');
			$('#content4, #content1, #content2').css('display', "none");
		}
		else if($('#tab3').hasClass('active-tab')){
			$('#tab4').addClass('active-tab');
			$('#content4').css('display', "block");
			$('#tab1, #tab2, #tab3').removeClass('active-tab');
			$('#content1, #content2, #content3').css('display', "none");
		}
		else if($('#tab4').hasClass('active-tab')){
			$('#tab1').addClass('active-tab');
			$('#content1').css('display', "block");
			$('#tab2, #tab3, #tab4').removeClass('active-tab');
			$('#content2, #content3, #content4').css('display', "none");
		}
	};
	function prevTab(){
		if($('#tab1').hasClass('active-tab')){
			$('#tab4').addClass('active-tab');
			$('#content4').css('display', "block");
			$('#tab3, #tab2, #tab1').removeClass('active-tab');
			$('#content3, #content2, #content1').css('display', "none");
		}
		else if($('#tab2').hasClass('active-tab')){
			$('#tab1').addClass('active-tab');
			$('#content1').css('display', "block");
			$('#tab4, #tab3, #tab2').removeClass('active-tab');
			$('#content4, #content3, #content2').css('display', "none");
		}
		else if($('#tab3').hasClass('active-tab')){
			$('#tab2').addClass('active-tab');
			$('#content2').css('display', "block");
			$('#tab1, #tab3, #tab4').removeClass('active-tab');
			$('#content1, #content3, #content4').css('display', "none");
		}
		else if($('#tab4').hasClass('active-tab')){
			$('#tab3').addClass('active-tab');
			$('#content3').css('display', "block");
			$('#tab2, #tab1, #tab4').removeClass('active-tab');
			$('#content2, #content1, #content4').css('display', "none");
		}
	};

	var elements = $('.modal-overlay, .modal');

	$('.open-modal').click(function(){
	    elements.addClass('active');
	});

	$('.close-modal').click(function(){
	    elements.removeClass('active');
	});

	$(document).ready(function(){
	$(document).on("click",".nav-link", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});
});
=======
wow = new WOW({
	animateClass: 'animated',
	offset: 100
});
wow.init();

	function first(){
		$('#content1').css('display', "block");
		$('#tab1').addClass('active-tab');
		$('#tab2, #tab3, #tab4').removeClass('active-tab');
		$('#content2, #content3, #content4').css('display', "none");
	};
	function second(){
		$('#content2').css('display', "block");
		$('#tab2').addClass('active-tab');
		$('#tab3, #tab4, #tab1').removeClass('active-tab');
		$('#content3, #content4, #content1').css('display', "none");
	};
	function third(){
		$('#content3').css('display', "block");
		$('#tab3').addClass('active-tab');
		$('#tab4, #tab1, #tab2').removeClass('active-tab');
		$('#content4, #content1, #content2').css('display', "none");
	};
	function fourth(){
		$('#content4').css('display', "block");
		$('#tab4').addClass('active-tab');
		$('#tab1, #tab2, #tab3').removeClass('active-tab');
		$('#content1, #content2, #content3').css('display', "none");
	};
	function nextTab(){
		if($('#tab1').hasClass('active-tab')){
			$('#tab2').addClass('active-tab');
			$('#content2').css('display', "block");
			$('#tab3, #tab4, #tab1').removeClass('active-tab');
			$('#content3, #content4, #content1').css('display', "none");
		}
		else if($('#tab2').hasClass('active-tab')){
			$('#tab3').addClass('active-tab');
			$('#content3').css('display', "block");
			$('#tab4, #tab1, #tab2').removeClass('active-tab');
			$('#content4, #content1, #content2').css('display', "none");
		}
		else if($('#tab3').hasClass('active-tab')){
			$('#tab4').addClass('active-tab');
			$('#content4').css('display', "block");
			$('#tab1, #tab2, #tab3').removeClass('active-tab');
			$('#content1, #content2, #content3').css('display', "none");
		}
		else if($('#tab4').hasClass('active-tab')){
			$('#tab1').addClass('active-tab');
			$('#content1').css('display', "block");
			$('#tab2, #tab3, #tab4').removeClass('active-tab');
			$('#content2, #content3, #content4').css('display', "none");
		}
	};
	function prevTab(){
		if($('#tab1').hasClass('active-tab')){
			$('#tab4').addClass('active-tab');
			$('#content4').css('display', "block");
			$('#tab3, #tab2, #tab1').removeClass('active-tab');
			$('#content3, #content2, #content1').css('display', "none");
		}
		else if($('#tab2').hasClass('active-tab')){
			$('#tab1').addClass('active-tab');
			$('#content1').css('display', "block");
			$('#tab4, #tab3, #tab2').removeClass('active-tab');
			$('#content4, #content3, #content2').css('display', "none");
		}
		else if($('#tab3').hasClass('active-tab')){
			$('#tab2').addClass('active-tab');
			$('#content2').css('display', "block");
			$('#tab1, #tab3, #tab4').removeClass('active-tab');
			$('#content1, #content3, #content4').css('display', "none");
		}
		else if($('#tab4').hasClass('active-tab')){
			$('#tab3').addClass('active-tab');
			$('#content3').css('display', "block");
			$('#tab2, #tab1, #tab4').removeClass('active-tab');
			$('#content2, #content1, #content4').css('display', "none");
		}
	};

	var elements = $('.modal-overlay, .modal');

	$('.open-modal').click(function(){
	    elements.addClass('active');
	});

	$('.close-modal').click(function(){
	    elements.removeClass('active');
	});

	$(document).ready(function(){
	$(document).on("click",".nav-link", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});
});

var select_city = document.getElementsByClassName('select_city')[0];
var select_city__options = document.getElementsByClassName('select_city__option');
var nav_href_tel = document.getElementsByClassName('nav_href_tel')[0];
var tel_number = document.getElementsByClassName('tel_number')[0];
var value_arr = [];
var tel_numbers = ["+7 (843) 518-89-89", "+7 (843) 518-00-00", "+7 (843) 518-11-11", "+7 (843) 518-22-22", "+7 (843) 518-33-33", "611-111-111", "+7 (843) 518-44-44", "+7 (843) 518-55-55", "+7 (843) 518-66-66", "+7 (843) 518-77-77"];


window.onload = function() {
	tel_number.innerHTML = tel_numbers[0];
    nav_href_tel.href = tel_numbers[0];

}

select_city.addEventListener('change', function() {
	for(var i = 0; i < select_city__options.length; i++) {
  	value_arr.push(select_city__options[i].value);
  }
	for(var j = 0; j < select_city__options.length; j++) {
  	if(select_city__options[j].selected === true && select_city__options[j].value == value_arr[j]) {
  		tel_number.innerHTML = tel_numbers[j];
    	nav_href_tel.href = tel_numbers[j];
    }
  }
});

>>>>>>> 66a3888cb199d963b2b61042334df81b5ce097a9
